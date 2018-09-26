/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
var strPlugins = 'uploadimage';
var toolbar = [
    { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
    { name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Image','FontSize', 'Bold', 'Italic', 'Strike',  'Underline', 'Subscript', 'Superscript'] },
    { name: 'basicstyles', groups: [ 'basicstyles' ], items: ['NumberedList', 'BulletedList', 'Link', 'Unlink' ] },
    { name: 'cleanup', groups: [ 'cleanup' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',  'Undo', 'Redo', 'HorizontalRule', 'Outdent', 'Indent', 'SpecialChar', 'Styles', 'Format'] },                                 
    
    { name: 'styles', items: ['TextColor', 'BGColor', 'Table', 'Maximize'] },
    
];
CKEDITOR.editorConfig = function( config )
{
	CKEDITOR.config.toolbar = toolbar;
	CKEDITOR.config.htmlEncodeOutput = false;
	CKEDITOR.config.basicEntities = true;
	CKEDITOR.config.extraPlugins = strPlugins;
	CKEDITOR.config.shiftEnterMode = CKEDITOR.ENTER_P;
	CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
	CKEDITOR.config.language = 'vi';
	CKEDITOR.config.height = 500;
	CKEDITOR.config.allowedContent = true;
	CKEDITOR.config.colorButton_enableMore = true;
	CKEDITOR.config.extraPlugins = 'font';
	CKEDITOR.config.fontSize_defaultLabel = '14px';
};