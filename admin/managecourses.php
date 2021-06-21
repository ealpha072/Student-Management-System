<?php
    require "dashboard.php";
    require "config.php";

    $sql8->execute();
    $schools = $sql8->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Manage courses</h3>
        </div>
        <div class="card-body">
            <div class="form">                    
                <div class=" search" style="float:left">
                    <select name="school" id="schooloption" class="form-control" onchange="showCourse()">
                        <option value="" selected disabled>Select school to see courses</option>
                        <?php foreach($schools as $school){?>
                        <option value="<?php echo $school["school_name"];?>"><?php echo $school["school_name"];?></option>
                        <?php }?>
                    </select>
                </div>                
            </div>
            <div id="coursetable">
            
            </div>
        </div>
    </div>
</div>
<script src="scripts/script.js"></script>