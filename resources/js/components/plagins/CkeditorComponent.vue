<template>
    <div>
<!--        <ckeditor :editor="editor" :value='valuepost' :config="editorConfig"  tag-name="textarea"  :name="namepost"></ckeditor>-->
        <editor tag-name="textarea"   :initial-value="valuepost" :name="namepost" :init="{
         inline:  false,
       toolbar: 'bold italic underline|cut copy paste|undo redo| justifyleft justifycenter justifyright |image table charmap | fullscreen  code |alignleft aligncenter alignright alignjustify',
       a_plugin_option: false,
       menubar: false,
       height: 216,
       branding: false,
       plugins: 'table link image code fullscreen charmap',
        a_configuration_option: 400,
        autosave_interval: '20s',
        images_upload_url: '/files'
        }"

        />

    </div>
</template>

<script>
    import Editor from '@tinymce/tinymce-vue'
    export default {
        props:['namepost', 'valuepost'],
        components: {
            'editor': Editor
        },
        data() {
            return {
                namePost: "",
                editor: '',
                editorData: '<p>Content of the editor.</p>',
                editorConfig: {
                }
            };
        },
    };
</script>
