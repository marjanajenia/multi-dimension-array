<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Multi row</h2>
                </div>
            </div>
        </div>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>category</th>
                        <th>Product</th>
                        <th>unit</th>
                        <th>Price</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody id="tab">
                    <tr>
                        <td><input type="text" name="inputs[0][category_id]" placeholder="enter category" required></td>
                        <td><input type="text" name="inputs[0][product_name]" placeholder="enter product" required></td>
                        <td><input type="text" name="inputs[0][unit]" placeholder="enter unit" required></td>
                        <td><input type="text" name="inputs[0][price]" placeholder="enter price" required></td>
                        <td><button type="button" class="btn btn-info" name="add" id="add">Add</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit">save</button>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(
            function() {
                var i = 0;
                $('#add').click(function() {
                    console.log('okay');
                    ++i;
                    $('#tab').append(
                        `<tr>
                        <td>
                            <input type="text" name="inputs[` + i + `][category_id]" placeholder="enter category" required>
                        </td>
                        <td>
                            <input type="text" name="inputs[` + i + `][product_name]" placeholder="enter category" required>
                        </td>
                        <td>
                            <input type="text" name="inputs[` + i + `][unit]" placeholder="enter category" required>
                        </td>
                        <td>
                            <input type="text" name="inputs[` + i + `][price]" placeholder="enter category" required>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger remove-table-row">remove</button>
                        </td>
                        </tr>`);
                });

                $(document).on('click', '.remove-table-row', function() {
                    $(this).parents('tr').remove();
                });
            });

    </script>
</body>
</html>
