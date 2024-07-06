<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Intern test</title>
</head>

<body>

    <div class="container">

    <div class="insertTopic">
         <form method="post" action="data.php" name="Topic">
            <div class="title">
                <div class="focus-input" style="padding:0.5rem; display: none; justify-content:space-between; align-items: center; border-bottom: solid .5px #efefef;">
                    <label for="title">หัวข้อระทู้ <span><small id="title-invalid" style="color:red;"></small></span></label>
                    <div style="display: flex; align-items: center;">
                    <svg style="display: none;" id="icon-title" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00ad23"><path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                    <label id="numberCharTitle">140</label>
                </div>
                </div>
                
                <textarea type="text" id="title-input" name="title" placeholder="หัวข้อระทู้" placeholder="หัวข้อกระทู้" maxlength="200"></textarea>
            </div>

            <div class="content">
            <div class="focus-input-content" style="padding:.5rem; display: none; justify-content:space-between; align-items: center; border-bottom: solid .5px #efefef;">
                    <label for="title">เนื้อหากระทู้<span><small id="content-invalid" style="color:red;"></small></span></label>
                    <div style="display: flex; align-items: center;">
                    <svg style="display: none;" id="icon-content" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00ad23"><path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                    <label id="numberCharContent">20</label>
                </div>
                </div>
                <textarea id="content" name="content" placeholder="เนื้อหากระทู้" maxlength="2060"></textarea>
            </div>

            <div class="name-author">
                <label id="label-author" for="author" style="padding:0.5rem; border-bottom: solid .5px #efefef; display:none;">ผู้เขียน</label>
                <input type="text" id="author" name="author" placeholder="ผู้เขียน"></input>
            </div>

            <div style="width:100%; display:flex; justify-content:end;">
                <button id="submit" disabled>ตั้งกระทู้</button>
            </div>
        </form>
    </div>
       


        <div id="showTopic">
            <?php if(isset($_SESSION['status'])) : ?>

                <?php foreach(array_reverse($_SESSION['data'], true) as $item) : ?>
            <div class="card">
                <h1 id="title-show">
                    <?php echo $item['title']; ?>
                </h1>

                <small style="color: #7e7d7d; margin-bottom:5rem;">
                   <span style="margin-right:.5rem;"> author by <b style="color:#F37A01; text-decoration: underline;"><?php echo $item['author']; ?></b></span> <?php echo $item['timestamp']; ?>  
                </small>

                <div id="content-show">
                <?php echo $item['content']; ?>
                </div>

            </div>

                <?php endforeach ?>
            <?php endif ?>
        </div>


    </div>
</body>

<script src="jquery-3.7.1.min.js"></script>
<script src="script.js"></script>


</html>