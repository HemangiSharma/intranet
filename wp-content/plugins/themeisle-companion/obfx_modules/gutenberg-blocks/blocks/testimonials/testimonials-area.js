/**
 * External dependencies
 */
import classnames from 'classnames';

/**
 * WordPress dependencies...
 */

const { __ } = wp.i18n;

const { registerBlockType } = wp.blocks;

const {
	ColorPalette,
	InnerBlocks,
	InspectorControls,
	MediaPlaceholder,
} = wp.editor;

const {
	Button,
	ToggleControl,
	SelectControl,
	PanelBody,
} = wp.components;

const { Fragment } = wp.element;

registerBlockType( 'orbitfox/testimonials-area', {
	title: __( 'Testimonials Area' ),
	description: __( 'Display kudos from customers and clients and display them on your website.' ),
	icon: 'testimonial',
	category: 'orbitfox',
	keywords: [
		'testimonials',
		'clients',
		'quotes'
	],
	attributes: {
		backgroundType: {
			type: 'string',
			default: 'color',
		},
		backgroundColor: {
			type: 'string',
			default: '#ffffff',
		},
		backgroundImageID: {
			type: 'string',
		},
		backgroundImageURL: {
			type: 'string',
		},
		backgroundDimmed: {
			type: 'boolean',
			default: true,
		},
		backgroundParallax: {
			type: 'boolean',
			default: false,
		},
	},

	supports: {
		align: [ 'wide', 'full' ],
	},

	edit: props => {
		const ALLOWED_BLOCKS = [ 'orbitfox/testimonials-block' ];
		const ALLOWED_MEDIA_TYPES = [ 'image' ];
		const TEMPLATE = [ [ 'orbitfox/testimonials-block' ], [ 'orbitfox/testimonials-block' ], [ 'orbitfox/testimonials-block' ] ];
		const changeType = value => {
			props.setAttributes( { backgroundType: value } );
		}
		const changeColor = value => {
			props.setAttributes( { backgroundColor: value } );
		}
		const changeBackground = value => {
			props.setAttributes( {
				backgroundImageID: value.id,
				backgroundImageURL: value.url
			} );
		}
		const removeBackground = () => {
			props.setAttributes( {
				backgroundImageID: '',
				backgroundImageURL: ''
			} );
		}
		const toggleDimming = () => {
			props.setAttributes( { backgroundDimmed: ! props.attributes.backgroundDimmed } );
		}
		const toggleParallax = () => {
			props.setAttributes( { backgroundParallax: ! props.attributes.backgroundParallax } );
		}
		const style = {
			background: props.attributes.backgroundType === 'color' ? props.attributes.backgroundColor : `url(' ${ props.attributes.backgroundImageURL } ')`,
		}
		return [
			<InspectorControls>
				<PanelBody
					title={ __( 'Background' ) }
				>
					<SelectControl
						label={ __( 'Background Type' ) }
						value={ props.attributes.backgroundType }
						options={ [
							{ label: 'Color', value: 'color' },
							{ label: 'Image', value: 'image' },
						] }
						onChange={ changeType }
					/>
					{ props.attributes.backgroundType === 'color' ?
						<ColorPalette
							label={ __( 'Background Color' ) }
							value={ props.attributes.backgroundColor }
							onChange={ changeColor }
						/>
					:
						props.attributes.backgroundImageURL ?
							<Fragment>
								<ToggleControl
									label={ __( 'Dimmed Background' ) }
									checked={ props.attributes.backgroundDimmed }
									onChange={ toggleDimming }
								/>
								<ToggleControl
									label={ __( 'Parallax Background' ) }
									checked={ props.attributes.backgroundParallax }
									onChange={ toggleParallax }
								/>
								<img
									src={ props.attributes.backgroundImageURL }
								/>
								<Button
									isLarge
									onClick={ removeBackground }
									style={ { marginTop: '10px' } }
								>
									{ __( 'Change or Remove Image' ) }
								</Button>
							</Fragment>
						:
							<MediaPlaceholder
								icon="format-image"
								labels={ {
									title:__( 'Background Image' ),
									name: __( 'an image' ),
								} }
								value={ props.attributes.backgroundImageID }
								onSelect={ changeBackground }
								accept="image/*"
								allowedTypes={ ALLOWED_MEDIA_TYPES }
							/>
					}
				</PanelBody>
			</InspectorControls>,

			<div
				className={ classnames(
					props.className,
					{ 'is-dim': props.attributes.backgroundType === 'image' && props.attributes.backgroundDimmed },
					{ 'is-parallax': props.attributes.backgroundType === 'image' && props.attributes.backgroundParallax },
				) }
				style={ style }
			>
				<InnerBlocks
					allowedBlocks={ ALLOWED_BLOCKS }
					template={ TEMPLATE }
				/>
			</div>
		];
	},

	save: props => {
		const style = {
			background: props.attributes.backgroundType === 'color' ? props.attributes.backgroundColor : `url(' ${ props.attributes.backgroundImageURL } ')`,
		}
		return (
			<div
				className={ classnames(
					'wp-block-orbitfox-testimonials-area',
					{ 'is-dim': props.attributes.backgroundType === 'image' && props.attributes.backgroundDimmed },
					{ 'is-parallax': props.attributes.backgroundType === 'image' && props.attributes.backgroundParallax },
				) }
				style={ style }
			>
				<InnerBlocks.Content/>
			</div>
		);
	},
});