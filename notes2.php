SELECT TOP 1 1 FROM products WHERE id = 'some value';
<!-- TO CHECK DATA ALREADY EXISTS -->

<a href="#equipmentInfo<?php echo $type_id;?>" data-toggle="modal"><button type="button" class="btn btn-sm btn-primary">Info</button></a>


<form action="" method="post">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Type Name</label>
                <input type="text" name="type_name" class="form-control border-input" placeholder="eg: MHBT - Baggage Trolley">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Description</label>
                <textarea rows="5" name="description" class="form-control border-input"
                placeholder="Massive trolley"></textarea>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>


<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<input type="submit" class="btn btn-primary" name="submittype" value="Save Changes"/>
</div>
</form>
