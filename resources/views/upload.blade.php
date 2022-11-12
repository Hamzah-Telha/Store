<!DOCTYPE html>
<html>
<body>
    <?php
        echo Form::open(array('url' => '/upload','files'=>'true'));
        echo 'Select the file to upload.';
        echo Form::file('apk');
        echo 'Enter the App version';
        echo Form::text('appversion');
        echo Form::submit('Upload File');
        echo Form::close();
    ?>
</body>
</html>