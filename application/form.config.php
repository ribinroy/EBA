<?php namespace JF;
/**

Copyright 2017 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-5fc597
Date:    2017-01-09 10:51:24
Version: v1.0-rc25
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-5fc597",
    "email": {
        "to": "",
        "cc": "",
        "bcc": "",
        "subject": "",
        "template": ""
    },
    "admin": {
        "users": "admin:48455",
        "dataDelivery": "fileOnly"
    },
    "thankyou": {
        "url": "",
        "message": "Application waiting for approval.",
        "seconds": ""
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [
        {
            "disabled": false,
            "action": "",
            "selector": "",
            "match": "",
            "rules": [

            ]
        }
    ],
    "fields": [
        {
            "label": "Name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    },
                    "alphanumeric": {
                        "enabled": true
                    }
                }
            },
            "cid": "c52"
        },
        {
            "label": "Name of Organisation",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "description": "If connection is required for an Organisation"
            },
            "cid": "c27"
        },
        {
            "label": "Name of the authority \/ developer of area \/ SEZ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "description": "If in industrial area \/ SEZ etc."
            },
            "cid": "c32"
        },
        {
            "label": "Category",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Individual \/ Proprietary",
                        "checked": false,
                        "value": "individual"
                    },
                    {
                        "label": "Partnership",
                        "checked": false,
                        "value": "partnership"
                    },
                    {
                        "label": "Private Ltd",
                        "checked": false,
                        "value": "privateltd"
                    },
                    {
                        "label": "Public Ltd",
                        "value": "publicltd",
                        "checked": false
                    },
                    {
                        "label": "Society",
                        "value": "society",
                        "checked": null
                    },
                    {
                        "label": "Govt Department",
                        "value": "govtdepartment",
                        "checked": null
                    },
                    {
                        "label": "Govt Undertaking",
                        "value": "govtundertaking",
                        "checked": null
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "min": {
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "cid": "c37"
        },
        {
            "label": "Address of premises where electricity connection is required",
            "field_type": "section_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                }
            },
            "cid": "c65"
        },
        {
            "label": "Name of Building ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "cid": "c71"
        },
        {
            "label": "Building Number ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "cid": "c43"
        },
        {
            "label": "Lane \/ street ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "cid": "c78"
        },
        {
            "label": "Place \/ Land mark ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "cid": "c85"
        },
        {
            "label": "District \/ Pin Code",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "cid": "c92"
        },
        {
            "label": "Village\/Survey No. ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "cid": "c99"
        },
        {
            "label": "Email",
            "field_type": "email",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "sender": false,
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "equalto": {
                        "enabled": false
                    }
                }
            },
            "cid": "c106"
        },
        {
            "label": "Present address (for communication) ",
            "field_type": "section_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                }
            },
            "cid": "c154"
        },
        {
            "label": "Name of Building ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": false
                    },
                    "required": {
                        "enabled": false
                    }
                }
            },
            "cid": "c111"
        },
        {
            "label": "Building Number ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": false
                    }
                }
            },
            "cid": "c117"
        },
        {
            "label": "Lane \/ street  ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": false
                    }
                }
            },
            "cid": "c124"
        },
        {
            "label": "Place \/ Land mark ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": false
                    }
                }
            },
            "cid": "c130"
        },
        {
            "label": "District \/ Pin Code ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": false
                    }
                }
            },
            "cid": "c136"
        },
        {
            "label": "Village\/Survey No.  ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": false
                    }
                }
            },
            "cid": "c142"
        },
        {
            "label": "Email ",
            "field_type": "email",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "sender": false,
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "equalto": {
                        "enabled": false
                    }
                }
            },
            "cid": "c148"
        },
        {
            "label": "Status of applicant",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Owner",
                        "checked": false,
                        "value": "Owner"
                    },
                    {
                        "label": "Tenant",
                        "checked": false,
                        "value": "Tenant",
                        "image": ""
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "cid": "c174"
        },
        {
            "label": "Whether Power Intensive or not",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Yes",
                        "checked": false,
                        "value": "Yes"
                    },
                    {
                        "label": "No",
                        "checked": false,
                        "value": "No"
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": false
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "cid": "c186"
        },
        {
            "label": "Whether properties of others need to be crossed over",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Yes",
                        "checked": false,
                        "value": "Yes"
                    },
                    {
                        "label": "No",
                        "checked": false,
                        "value": "No"
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    }
                },
                "presetJson": "",
                "multiple": false,
                "dependOn": {
                    "enabled": false
                }
            },
            "cid": "c191"
        },
        {
            "label": "If YES, whether Consents obtained in all cases",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Yes",
                        "checked": false,
                        "value": "Yes"
                    },
                    {
                        "label": "No",
                        "checked": false,
                        "value": "No"
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    }
                },
                "presetJson": "",
                "multiple": false,
                "dependOn": {
                    "enabled": true,
                    "cid": "c186",
                    "remote": true
                }
            },
            "cid": "c196"
        },
        {
            "label": "Purpose of Supply",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Domestic",
                        "checked": false,
                        "value": "Domestic"
                    },
                    {
                        "label": "Commercial",
                        "checked": false,
                        "value": "Commercial"
                    },
                    {
                        "label": "Industrial",
                        "checked": false,
                        "value": "Industrial"
                    },
                    {
                        "label": "Agricultural",
                        "value": "Agricultural",
                        "checked": null
                    },
                    {
                        "label": "Others",
                        "value": "Others",
                        "checked": null
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "cid": "c201"
        },
        {
            "label": "Type of connection",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Permanent",
                        "checked": false,
                        "value": "Permanent"
                    },
                    {
                        "label": "Temporary",
                        "checked": false,
                        "image": "",
                        "value": "Temporary"
                    },
                    {
                        "label": "Seasonal",
                        "checked": false,
                        "value": "Seasonal"
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "cid": "c218"
        },
        {
            "label": "PAN No.",
            "field_type": "number",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "numSpinner": {
                    "enabled": false
                },
                "validators": {
                    "number": {
                        "enabled": true
                    },
                    "max": {
                        "enabled": true,
                        "val": "10"
                    },
                    "min": {
                        "enabled": true,
                        "val": "10"
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "cid": "c206"
        },
        {
            "label": "Aadhar No.",
            "field_type": "number",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "numSpinner": {
                    "enabled": false
                },
                "validators": {
                    "number": {
                        "enabled": true
                    },
                    "max": {
                        "enabled": true,
                        "val": "12"
                    },
                    "min": {
                        "enabled": true,
                        "val": "12"
                    },
                    "required": {
                        "enabled": false
                    }
                }
            },
            "cid": "c211"
        },
        {
            "label": "Constructed area (m^2)",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true,
                        "msg": "numbers"
                    }
                }
            },
            "cid": "c223"
        },
        {
            "label": "Plot size (m^2) ",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "alphanumeric": {
                        "enabled": true,
                        "msg": "numbers"
                    }
                }
            },
            "cid": "c228"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "cid": "c100"
        }
    ]
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class