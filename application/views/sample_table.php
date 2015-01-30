<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

<div id="container">
    <div class="row form-row">
        <div class="col-md-3">
            <label for="project">list all Users</label>
            <form action="get_task" method="post" id="task">
            <select multiple name="user" class="form-control" id="sel2" size="30">
                <?php
                        foreach ($users['data'] as $key => $value) {
                        ?>
                            <option value="<?=$value['id']?>"><?=$value['name']?></option>
                        <?php
                        }
                        ?>
            </select>
            
        </div>
        <div class="col-md-2">
        <input type="submit" class="btn btn-default" name="submit" value="Get Task">
        </form>
        </div>
        <div class="col-md-6">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="10%">Task Name</th>                                  
                </tr>
            </thead>
            <tbody id="tabel">
             <?php
                    foreach ($task2['data'] as $key => $value) {
                    ?>
                <tr>
                    <td valign="middle"><span class="muted"><?=$value['name']?></span></td>
                </tr>

                <?php }?>
            </tbody>
        </table>
        </div>
    </div>
</div>

</pre>