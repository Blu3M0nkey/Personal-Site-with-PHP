<div class="nav">
    <ul>
        <li><a href="<?= url_for('/index.php')?>">Main</a></li>
        <li>
            <div class="dropdwn">
                <a class = "drpbtn" href="<?= url_for('/projects/index.php')?>">Sample Projects</a>
                <div class ="dropdwn-content">
                    <a href="https://blu3m0nkey.github.io/spaceCadet/" target="_blank">Space Cadet Game</a>
                    <a href="<?= url_for('/projects/mcs320prog2_5.html')?>"> MCS 320 Project 2.5</a>
                </div>
            </div>
        </li>
        <li><a href = "<?= url_for('Designs/myDesigns.php')?>">Designs</a></li>
        <li><a href="<?= url_for('AboutMe.php')?>">About Me</a></li>
    </ul>
</div>