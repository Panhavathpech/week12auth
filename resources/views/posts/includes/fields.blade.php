<div class="form-group">
    <div class="col-lg-4">
        <label for="name">Category Name *</label>
        <input type="text" name="name" id="name" class="form-control" required value="@if(isset($category)) {{ $category->name }} @endif"/>

    </div>
</div>

<div class="form-group">
    <div class="col-lg-4">
    <button class="btn btn-primary">Save</button>
        </div>
</div>
