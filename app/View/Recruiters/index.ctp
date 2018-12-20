<?php

echo $this->Element('recruiters/header') ?>

<div class="clearfix"></div>      
<div class="wrapper">
            <?php echo $this->Element('recruiters/sidebar') ?>          

    <div class="main-panel">

        <!-- navigation start -->
        <div class="new_view" style="margin:2% 3% 2% 3%;">	
            <div class="row">
                <form method="post">
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="state" required="">
                                <option>--Select Province/State--</option>
                                        <?php foreach ($province as $p_data) { ?>
                                <option value="<?php echo $p_data['state']['id'] ?>"><?php echo $p_data['state']['state_name'] ?></option>
                                        <?php } ?>
                                        <?php foreach ($state as $s_data) { ?>
                                <option value="<?php echo $s_data['state']['id'] ?>"><?php echo $s_data['state']['state_name'] ?></option>
                                        <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="city" required="">
                                <option>--Select City--</option>
                                        <?php foreach($city as $c_data) { ?>
                                <option value="<?php echo $c_data['city']['id'] ?>"><?php echo $c_data['city']['city_name'] ?></option>
                                        <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="school" required="">
                                <option>--Select School--</option>
                                        <?php foreach ($school as $r_data) { ?>
                                <option value="<?php echo $r_data['register']['school'] ?>"><?php echo $r_data['register']['school'] ?></option>
                                        <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-danger">Show</button>
                    </div>
                </form>
            </div>    

            <div class="col-lg-12 col-md-12 space">
                <table class="table table-striped table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Province/State</th>
                            <th>City</th>
                            <th>Program</th>
                            <th>School</th>
                        </tr>
                    </thead>
                    <tbody>
                                <?php if(count($result) > 0) { 
                                    foreach ($result as $list) {
                                ?>
                        <tr>
                            <td><?php echo $list['register']['first_name'] ?> <?php echo $list['register']['last_name'] ?></td>
                            <td><?php echo $list['register']['email'] ?></td>
                            <td><?php echo $list['country']['name'] ?></td>
                            <td><?php echo $list['state']['state_name'] ?></td>
                            <td><?php echo $list['city']['city_name'] ?></td>
                            <td><?php echo $list['register']['program'] ?></td>
                            <td><?php echo $list['register']['school'] ?></td>
                        </tr>
                                <?php } } else { ?>
                        <tr>
                            <td colspan="10"><center><b>No Records Found</b></center></td>
                    </tr>
                                <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>

    <!--   Core JS Files   -->
    <?php echo $this->Element('recruiters/footer') ?> 

</body>

</html>