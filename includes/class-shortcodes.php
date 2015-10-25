<?php

class AffiliateWP_Affiliate_Landing_Pages_Shortcodes {

	public function __construct() {

        add_shortcode( 'affiliate_landing_page_bio', array( $this, 'shortcode_bio' ) );
		add_shortcode( 'affiliate_landing_page_affiliate_name', array( $this, 'shortcode_affiliate_name' ) );
		add_shortcode( 'affiliate_landing_page_affiliate_website', array( $this, 'shortcode_affiliate_website' ) );
		add_shortcode( 'affiliate_landing_page_affiliate_gravatar', array( $this, 'shortcode_affiliate_gravatar' ) );

		// for integration
		add_shortcode( 'affiliate_details', array( $this, 'shortcode_affiliate_details' ) );

	}

	/**
    * [affiliate_details] shortcode
    *
    * @since  1.0
    */
    public function shortcode_affiliate_details( $atts, $content = null ) {

		$atts = shortcode_atts( array(
			'title' => '',
			'field' => ''
		), $atts, 'affiliate_details' );

    	$content = affiliatewp_landing_pages()->functions->show_affiliate_details( $atts );

    	return do_shortcode( $content );
    }

    /**
    * [affiliate_landing_page_bio] shortcode
    *
    * @since  1.0
    */
    public function shortcode_bio( $atts, $content = null ) {

		$atts = shortcode_atts( array(
			'title' => '',
		), $atts, 'affiliate_landing_page_bio' );

    	$content = affiliatewp_landing_pages()->functions->show_affiliate_bio( $atts );

    	return do_shortcode( $content );
    }

	/**
    * [affiliate_landing_page_affiliate_name] shortcode
    *
    * @since  1.0
    */
    public function shortcode_affiliate_name( $atts, $content = null ) {

		$atts = shortcode_atts( array(
			'title' => '',
		), $atts, 'affiliate_landing_page_affiliate_name' );

    	$content = affiliatewp_landing_pages()->functions->show_affiliate_name( $atts );

    	return do_shortcode( $content );
    }

	/**
    * [affiliate_landing_page_affiliate_website] shortcode
    *
    * @since  1.0
    */
    public function shortcode_affiliate_website( $atts, $content = null ) {

		$atts = shortcode_atts( array(
			'title' => '',
		), $atts, 'affiliate_landing_page_affiliate_website' );

    	$content = affiliatewp_landing_pages()->functions->show_affiliate_website( $atts );

    	return do_shortcode( $content );
    }

	/**
    * [affiliate_landing_page_affiliate_website] shortcode
    *
    * @since  1.0
    */
    public function shortcode_affiliate_gravatar( $atts, $content = null ) {

		$atts = shortcode_atts( array(
			'title' => '',
		), $atts, 'affiliate_landing_page_affiliate_website' );

    	$content = affiliatewp_landing_pages()->functions->show_affiliate_gravatar( $atts );

    	return do_shortcode( $content );
    }

}
new AffiliateWP_Affiliate_Landing_Pages_Shortcodes;