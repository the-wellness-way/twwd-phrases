<?php
namespace TwwdPhrases\Setup;

use TwwdPhrases\Options\TwwcOptions;

/**
 * Class for TWW specific Protein Settings. This is here for safe keeping purposes, as 
 * well as for offering as an option for other websites in the future.
 * 
 * 
 * 
 * 
 * 
 */
class TwwdRegisterSettingsSchema {
   private static $row_one_str = 'twwd_row_one';
    private static $row_two_str = 'twwd_row_two';
    private static $row_three_str = 'twwd_row_three';
    private static $row_four_str = 'twwd_row_four';
    private static $row_five_str = 'twwd_row_five';

    public static function setup() {
        self::register_post_types();
    }

    public static function setup_post_meta() {
        self::register_row_one_post_meta(self::$row_one_str);
        self::register_row_two_post_meta(self::$row_two_str);
        self::register_row_three_post_meta(self::$row_three_str);
        self::register_row_four_post_meta(self::$row_four_str);
        self::register_row_five_post_meta(self::$row_five_str);
    }

    public static function register_post_types() {
        register_post_type(self::$row_one_str, [
            'labels' => [
                'name' => __('Row One'),
                'singular_name' => __('Row One')
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'custom-fields']
        ]);

        register_post_type(self::$row_two_str, [
            'labels' => [
                'name' => __('Row Two'),
                'singular_name' => __('Row Two')
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'custom-fields']
        ]);

        register_post_type(self::$row_three_str, [
            'labels' => [
                'name' => __('Row Three'),
                'singular_name' => __('Row Three')
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'custom-fields']
        ]);

        register_post_type(self::$row_four_str, [
            'labels' => [
                'name' => __('Row Four'),
                'singular_name' => __('Row Four')
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'custom-fields']
        ]);

        register_post_type(self::$row_five_str, [
            'labels' => [
                'name' => __('Row Five'),
                'singular_name' => __('Row Five')
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'custom-fields']
        ]);
    }

     /**
     * Create custom meta fields using ACF for row 1 for post type $post_type. Here is the XML structure we 
     * will get the fields from:
     * 
     * <xs:element name="row1">
     *      <xs:complexType>
     *        <xs:sequence>
     *         <xs:element name="SetName" type="xs:string" minOccurs="0" />
     *         <xs:element name="MenuName" type="xs:string" minOccurs="0" />
     *         <xs:element name="Seq" type="xs:short" minOccurs="0" />
     *         <xs:element name="Caption" type="xs:string" minOccurs="0" />
     *         <xs:element name="Action" type="xs:string" minOccurs="0" />
     *         <xs:element name="ActionText" type="xs:string" minOccurs="0" />
     *         <xs:element name="ActionPtr" type="xs:int" minOccurs="0" />
     *         <xs:element name="ActionTextRtf" type="xs:string" minOccurs="0" />
     *       </xs:sequence>
     *     </xs:complexType>
     *  </xs:element>
     */
    public static function register_row_one_post_meta($post_type) {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group([
                'key' => 'group_5f9b1b1b1b1b1',
                'title' => 'Row 1',
                'fields' => [
                    [
                        'key' => 'field_5f9b1b1b1b1b1',
                        'label' => 'Set Name',
                        'name' => 'set_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b2',
                        'label' => 'Menu Name',
                        'name' => 'menu_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b3',
                        'label' => 'Seq',
                        'name' => 'seq',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b4',
                        'label' => 'Caption',
                        'name' => 'caption',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b5',
                        'label' => 'Action',
                        'name' => 'action',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b6',
                        'label' => 'Action Text',
                        'name' => 'action_text',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b7',
                        'label' => 'Action Ptr',
                        'name' => 'action_ptr',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b8',
                        'label' => 'Action Text RTF',
                        'name' => 'action_text_rtf',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                ],
                'location' => [
                    [
                        [
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => $post_type,
                        ],
                    ],
                ],
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
            ]);
        }
    }

    /**
     * Create custom meta fields using ACF for row 2 for post type $post_type. Here is the XML structure we 
     * will get the fields from:
     * 
     * <xs:element name="row2">
     *      <xs:complexType>
     *        <xs:sequence>
     *         <xs:element name="SetName" type="xs:string" minOccurs="0" />
     *         <xs:element name="ChoiceName" type="xs:string" minOccurs="0" />
     *       </xs:sequence>
     *     </xs:complexType>
     *  </xs:element>
     */
    public static function register_row_two_post_meta($post_type) {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group([
                'key' => 'group_5f9b1b1b1b1b9',
                'title' => 'Row 2',
                'fields' => [
                    [
                        'key' => 'field_5f9b1b1b1b1b9',
                        'label' => 'Set Name',
                        'name' => 'set_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1ba',
                        'label' => 'Choice Name',
                        'name' => 'choice_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                ],
                'location' => [
                    [
                        [
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => $post_type,
                        ],
                    ],
                ],
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
            ]);
        }
    }

     /**
     * Create custom meta fields using ACF for row 3 for post type $post_type. Here is the XML structure we 
     * will get the fields from:
     * 
     * <xs:element name="row3">
     *      <xs:complexType>
     *        <xs:sequence>
     *         <xs:element name="SetName" type="xs:string" minOccurs="0" />
     *         <xs:element name="ChoiceName" type="xs:string" minOccurs="0" />
     *         <xs:element name="Seq" type="xs:int" minOccurs="0" />
     *         <xs:element name="ItemName" type="xs:string" minOccurs="0" />
     *       </xs:sequence>
     *     </xs:complexType>
     *  </xs:element>
     */
    public static function register_row_three_post_meta($post_type) {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group([
                'key' => 'group_5f9b1b1b1b1b10',
                'title' => 'Row 3',
                'fields' => [
                    [
                        'key' => 'field_5f9b1b1b1b1b10',
                        'label' => 'Set Name',
                        'name' => 'set_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b11',
                        'label' => 'Choice Name',
                        'name' => 'choice_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b12',
                        'label' => 'Seq',
                        'name' => 'seq',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b13',
                        'label' => 'Item Name',
                        'name' => 'item_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                ],
                'location' => [
                    [
                        [
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => $post_type,
                        ],
                    ],
                ],
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
            ]);
        }
    }

    /**
     * Create custom meta fields using ACF for row 4 for post type $post_type. Here is the XML structure we 
     * will get the fields from:
     * 
     * <xs:element name="row4">
     *      <xs:complexType>
     *        <xs:sequence>
     *         <xs:element name="MacroLinkID" type="xs:long" minOccurs="0" />
     *         <xs:element name="MacroLinkLabel" type="xs:string" minOccurs="0" />
     *         <xs:element name="MacroLinkQuestion" type="xs:string" minOccurs="0" />
     *         <xs:element name="MacroLinkValue" type="xs:string" minOccurs="0" />
     *         <xs:element name="MacroLinkType" type="xs:string" minOccurs="0" />
     *         <xs:element name="MacroLinkSetName" type="xs:string" minOccurs="0" />
     *         <xs:element name="MacroLinkAnswerSet" type="xs:string" minOccurs="0" />
     *         <xs:element name="MacroLinkCreated" type="xs:dateTime" minOccurs="0" />
     *         <xs:element name="MacroLinkDefault" type="xs:string" minOccurs="0" />
     *         <xs:element name="IntakeFieldName" type="xs:string" minOccurs="0" />
     *       </xs:sequence>
     *     </xs:complexType>
     *  </xs:element>
     */
    public static function register_row_four_post_meta($post_type) {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group([
                'key' => 'group_5f9b1b1b1b1b14',
                'title' => 'Row 4',
                'fields' => [
                    [
                        'key' => 'field_5f9b1b1b1b1b14',
                        'label' => 'Macro Link ID',
                        'name' => 'macro_link_id',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b15',
                        'label' => 'Macro Link Label',
                        'name' => 'macro_link_label',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b16',
                        'label' => 'Macro Link Question',
                        'name' => 'macro_link_question',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b17',
                        'label' => 'Macro Link Value',
                        'name' => 'macro_link_value',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b18',
                        'label' => 'Macro Link Type',
                        'name' => 'macro_link_type',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b19',
                        'label' => 'Macro Link Set Name',
                        'name' => 'macro_link_set_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b20',
                        'label' => 'Macro Link Answer Set',
                        'name' => 'macro_link_answer_set',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b21',
                        'label' => 'Macro Link Created',
                        'name' => 'macro_link_created',
                        'type' => 'date_time_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b22',
                        'label' => 'Macro Link Default',
                        'name' => 'macro_link_default',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b23',
                        'label' => 'Intake Field Name',
                        'name' => 'intake_field_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                ],
                'location' => [
                    [
                        [
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => $post_type,
                        ],
                    ],
                ],
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
            ]);
        }
    }
    
    /**
     * Create custom meta fields using ACF for row 5 for post type $post_type. Here is the XML structure we 
     * will get the fields from:
     * 
     * <xs:element name="row5">
     *      <xs:complexType>
     *        <xs:sequence>
     *         <xs:element name="ID" type="xs:int" minOccurs="0" />
     *         <xs:element name="MacroLinkID" type="xs:int" minOccurs="0" />
     *         <xs:element name="IntakeFieldID" type="xs:int" minOccurs="0" />
     *         <xs:element name="IntakeFieldName" type="xs:string" minOccurs="0" />
     *         <xs:element name="IntakeInput" type="xs:string" minOccurs="0" />
     *         <xs:element name="ChartNoteOutput" type="xs:string" minOccurs="0" />
     *       </xs:sequence>
     *     </xs:complexType>
     *  </xs:element>
     */
    public static function register_row_five_post_meta($post_type) {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group([
                'key' => 'group_5f9b1b1b1b1b24',
                'title' => 'Row 5',
                'fields' => [
                    [
                        'key' => 'field_5f9b1b1b1b1b24',
                        'label' => 'ID',
                        'name' => 'id',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b25',
                        'label' => 'Macro Link ID',
                        'name' => 'macro_link_id',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b26',
                        'label' => 'Intake Field ID',
                        'name' => 'intake_field_id',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b27',
                        'label' => 'Intake Field Name',
                        'name' => 'intake_field_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b28',
                        'label' => 'Intake Input',
                        'name' => 'intake_input',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                    [
                        'key' => 'field_5f9b1b1b1b1b29',
                        'label' => 'Chart Note Output',
                        'name' => 'chart_note_output',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ],
                ],
                'location' => [
                    [
                        [
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => $post_type,
                        ],
                    ],
                ],
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
            ]);
        }
    }
}
