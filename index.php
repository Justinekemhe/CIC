<?php include 'header.php'; ?>
<div class="phpdarkcoding">
    <section class="headeroption">
        <h2>RESEARCHER DISSEMINATION</h2>
    </section>

    <section class="mainoption">
        <h1 class="success">Welcome To dashboard</h1>
        <h3 class="success"><b><?php echo $_SESSION['name']; ?></b>, You can now easily manage your dashboard from here.</h3>
        <hr/>
        <div class="contentoption">
            <div class="option">
                <h4><a href="addmember.php">Disseminate</a></h4>
            </div>
            <div class="option">
                <h4><a href="viewmember.php">View Member</a></h4>
            </div>
            <div class="option">
                <h4><a href="logout.php">Logout</a></h4>
            </div>

        </div>

    </section>
    <?php include 'footer.php'; ?>