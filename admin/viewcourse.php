<?php 
    require "dashboard.php";
    require "config.php";
    
    $sql3->execute();
	$sql8->execute();
    $results = $sql3->fetchAll(PDO::FETCH_ASSOC); 
	$schools = $sql8->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>View Courses</h5>
        </div>
        <div class="card-body">
            <div class="form">
                <div class="limit" style="float: right;">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <label for="inputPassword6">Show
                                <input type="number" class="form-control mx-sm-3" min="1" max="<?php echo count($results)?>">entries
                            </label>
                        </div>
                    </form>
                </div>
                
                <div class=" search" style="float:left">
					<select name="school" id="schooloption" class="form-control" onchange="showCourse()">
						<option value="" selected disabled>View by school</option>
						<?php foreach($schools as $school){?>
						<option value="<?php echo $school["school_name"];?>"><?php echo $school["school_name"];?></option>
						<?php }?>
					</select>
                </div>                
            </div>

            <div class="table" id="coursetable">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S No</th>
                            <th scope="col">School</th>
                            <th scope="col">Course Abbr</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Date Created</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $course){?>
                        <tr>
                            <th scope="row"><?php echo $course["id"]; ?></th>
                            <td><?php echo $course["school"]; ?></td>
                            <td><?php echo $course["short_name"]; ?></td>
                            <td><?php echo $course["full_name"]; ?></td>
                            <td><?php echo $course["date_created"]; ?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>           
        </div>
    </div>	
</div>
<script src="scripts/script.js"></script>