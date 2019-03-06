/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */


CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// %REMOVE_START%
	config.plugins =
		'about,' +
		'a11yhelp,' +
		'basicstyles,' +
		'bidi,' +
		'blockquote,' +
		'clipboard,' +
		'colorbutton,' +
		'colordialog,' +
		'copyformatting,' +
		'contextmenu,' +
		'dialogadvtab,' +
		'div,' +
		'elementspath,' +
		'enterkey,' +
		'entities,' +
		'filebrowser,' +
		'find,' +
		'flash,' +
		'floatingspace,' +
		'font,' +
		'format,' +
		'forms,' +
		'horizontalrule,' +
		'htmlwriter,' +
		'image,' +
		'iframe,' +
		'indentlist,' +
		'indentblock,' +
		'justify,' +
		'language,' +
		'link,' +
		'list,' +
		'liststyle,' +
		'magicline,' +
		'maximize,' +
		'newpage,' +
		'pagebreak,' +
		'pastefromword,' +
		'pastetext,' +
		'preview,' +
		'print,' +
		'removeformat,' +
		'resize,' +
		'save,' +
		'selectall,' +
		'showblocks,' +
		'showborders,' +
		'smiley,' +
		'sourcearea,' +
		'specialchar,' +
		'stylescombo,' +
		'tab,' +
		'table,' +
		'tableselection,' +
		'tabletools,' +
		'templates,' +
		'toolbar,' +
		'undo,' +
		'uploadimage,' +
		'wysiwygarea';
	// %REMOVE_END%

		config.extraPlugins = 'wordcount,notification';

		config.wordcount = {

	    // Whether or not you want to show the Paragraphs Count
	    showParagraphs: false,

	    // Whether or not you want to show the Word Count
	    showWordCount: false,

	    // Whether or not you want to show the Char Count
	    showCharCount: true,

	    // Whether or not you want to count Spaces as Chars
	    countSpacesAsChars: false,

	    // Whether or not to include Html chars in the Char Count
	    countHTML: false,
	    
	    // Maximum allowed Word Count, -1 is default for unlimited
	    maxWordCount: -1,

	    // Maximum allowed Char Count, -1 is default for unlimited
	    maxCharCount: -1,

	    // Add filter to add or remove element before counting (see CKEDITOR.htmlParser.filter), Default value : null (no filter)
	    filter: new CKEDITOR.htmlParser.filter({
	        elements: {
	            div: function( element ) {
	                if(element.attributes.class == 'mediaembed') {
	                    return false;
	                }
	            }
	        }
	    })
	};
};

// %LEAVE_UNMINIFIED% %REMOVE_LINE%
