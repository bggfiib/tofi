<?php 
    function setWS()
    {
        $pageName = basename($_SERVER['PHP_SELF']);
        if($pageName == "control.php"){
            return;
        }
        echo "<script>
        const checkstatus = function() {
            fetch('./sse-server.php')
                .then(response => response.text())
                .then(data => {

                    console.log('Server response:', data);


                    checkstatus();
                })
                .catch(error => {
                    console.error('Error fetching data:', error);


                    setTimeout(checkstatus, 1000);
                });
        };


        checkstatus();
    </script>";
    }
    setWS();
 ?>