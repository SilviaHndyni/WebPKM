<div class="sidebar" style="background-color:blue !important">
            <div class="sidebar-wrapper">
                <div style="margin-left:4rem;margin-top:2rem;">
                    <a href="#" class="simple-text putih">
                        WISATA
                    </a>
                </div>
                <?php
                $admin=isset($_GET['admin']) ? $_GET['admin']: 'admin';
                ?>
                <ul class="nav">
                    <li <?php if($admin=="admin"){echo "class='nav-item active'";}?>>
                        <a class="nav-link" href="index.php?admin=admin">
                        <i class="fa fa-edit" style="font-size:28px"></i>
                            <p>Admin</p>
                        </a>
                    </li>
                    <li <?php if($admin=="destinasi"){echo "class='nav-item active'";}?>>
                        <a class="nav-link active" href="index.php?admin=destinasi">
                        <i class="fa fa-edit" style="font-size:28px"></i>
                            <p>Destinasi</p>
                        </a>
                    </li>
                    <li <?php if($admin=="hotel"){echo "class='nav-item active'";}?>>
                        <a class="nav-link" href="index.php?admin=hotel">
                        <i class="fa fa-edit" style="font-size:28px"></i>
                            <p>Hotel</p>
                        </a>
                    </li>
                    <li <?php if($admin=="warung"){echo "class='nav-item active'";}?>>
                        <a class="nav-link" href="index.php?admin=warung">
                        <i class="fa fa-edit" style="font-size:28px"></i>
                            <p>Warung</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>