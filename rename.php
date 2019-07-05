<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://i.imgur.com/ez6p4Gu.png">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <meta charset='utf-8'>
    <title>Advanced File Renamer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        body{
            font-family: cairo;
            margin: auto;
        }
        .row.all{
            width: max-content;
            margin: auto;
            border: 1px solid #f1f1f1;
            display: block;
            box-shadow: 0 2px 2px #e4e4e4;
            border-radius: 7px;
        }
        h3{
            text-align: center;
            background: #007bff;
            color: aliceblue;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }
        .description{
            font-size: 10px;
            margin-top: 5px;
            text-align: right;
            margin: 0;
            padding: 0 23px;
            color: #ffffffd6;
        }
        form{margin:auto}
        label{color:gray;padding:0!important;}
        small{color:gray;}
        select{padding: 0 .75rem !important;}
        input[type="checkbox"],select{cursor:pointer;}
    </style>

</head>
<body><br>
<div class="row all">
    
<h3 class="col-12">
    Advanced File Renamer
    <p class="description">Multiple file renaming tool</p>
</h3>

<form action="r_action.php" method="post">
    <div class="form-group col-12">
    
    <label class="col-12">Folder:</label>
    <?php
    function glob_dir_recursive($dirs, $depth=0) {
    foreach ($dirs as $item) {
        echo  '<option class="folders" value="'. basename($item) .'">' . basename($item) . '</option>';
        $subdir =  glob($item . DIRECTORY_SEPARATOR . '*', GLOB_ONLYDIR);
        if (!empty($subdir)) { 
            glob_dir_recursive($subdir, $depth+1);
            }
        }
    };
        
    $dirs = array('.');
        
    echo '<select name="folder" class="form-control">';
    echo '<option value="." selected>Current folder</option>';
    glob_dir_recursive($dirs); //to list directories and files
    echo '</select>';
        
    ?>
<style>
    .folders[value="."]{display:none;}
</style>
<br>
<label class="col-12">Files type:</label>
<select name="type" class="form-control">
    <optgroup label="Images">
    <option value="jpg">jpg</option>
    <option value="png">png</option>
    <option value="gif">gif</option>
    <option value="bmp">bmp</option>
    </optgroup>
    <optgroup label="Videos">
    <option value="mp4">mp4</option>
    <option value="avi">avi</option>
    <option value="flv">flv</option>
    <option value="wmv">wmv</option>
    </optgroup>
    </optgroup>
    <optgroup label="Sounds">
    <option value="mp3">mp3</option>
    <option value="m4a">m4a</option>
    <option value="wav">wav</option>
    <option value="ogg">ogg</option>
    <option value="aac">aac</option>
    </optgroup>
    <optgroup label="Documents">
    <option value="doc">doc</option>
    <option value="docx">docx</option>
    <option value="csv">csv</option>
    <option value="xls">xls</option>
    <option value="xlsx">xlsx</option>
    <option value="pdf">pdf</option>
    <option value="txt">txt</option>
    <option value="ppt">ppt</option>
    <option value="pptx">pptx</option>
    </optgroup>
    <optgroup label="Archive">
    <option value="rar">rar</option>
    <option value="zip">zip</option>
    <option value="7z">7z</option>
    <option value="tar">tar</option>
    <option value="gz">gz</option>
    <option value="tar.gz">tar.gz</option>
    </optgroup>
    <optgroup label="Web">
    <option value="html">html</option>
    <option value="css">css</option>
    <option value="scss">scss</option>
    <option value="htm">htm</option>
    <option value="js">js</option>
    <option value="php">php</option>
    </optgroup>
</select>
<br>

<div style="border:1px solid #e6e6e6;border-radius:3px;padding:2px">
<label>Optional text:</label>
<div style="display:flex">
<input class="form-control form-control-sm col-6" placeholder="Before number" name="before"><input class="form-control form-control-sm col-6" placeholder="After number" name="after">
</div>
<hr style="margin: 7px 5px 1px 5px;">
<label>Insert space:</label>
<div style="display:flex;color: #007bff;">
<div class="col-6">
Before number:
<input type="checkbox" name="s_before" value="&nbsp;">
</div>
<div style="margin-left:10px" class="col-6">
After number:
<input type="checkbox" name="s_after" value="&nbsp;">
</div>
</div>
</div>

<br>
<input class="btn btn-primary" type="submit" value="Rename">
</form>

<br><hr>
<div class="col" style="text-align:center">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="hidden" name="hosted_button_id" value="LX9XQ9QZVGTNQ" />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_DZ/i/scr/pixel.gif" width="1" height="1" />
</form>

<small>
    Advanced File Renamer V1 | 
    By <a href="https://khamsat.com/user/grinch" target="_blank">Mohamed Slimane</a>
</small>
</div>

</div>
</form>

</div>
</body>
</html>
