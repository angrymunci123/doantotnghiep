<div class="row">
    <h2 style="display:block; text-align:center; color:black;"> Product Management </h2>
    <div class="col-md-6">
        <table>
            <tr>
                <td>
                    <form method="get" action="/admin/product_management/add_product">
                        <button name="controller=create" class="btn btn-primary">Add New Product</button>
                    </form>
                </td>
                <td>
                    <form method="get" action="/admin/product_management/add_product_detail">
                        <button name="controller=create" class="btn btn-primary">Add New Product Detail</button>
                    </form>
                </td>
            </tr>
        </table>
        <br>
    </div>
    <hr>
    <div class="col-md-6">
        <table>
            <tr>
                <td>
                    <label>Filter By Brand:</label>
                </td>
                <td>
                    <form method="get" action="/admin/product_management/adidas">
                        <button name="controller=create" class="btn btn-primary">Adidas</button>
                    </form>
                </td>
                <td>
                    <form method="get" action="/admin/product_management/balenciaga">
                        <button name="controller=create" class="btn btn-primary">Balenciaga</button>
                    </form>
                </td>
                <td>
                    <form method="get" action="/admin/product_management/converse">
                        <button name="controller=create" class="btn btn-primary">Converse</button>
                    </form>
                </td>
                <td>
                    <form method="get" action="/admin/product_management/nike">
                        <button name="controller=create" class="btn btn-primary">Nike</button>
                    </form>
                </td>
                <td>
                    <form method="get" action="/admin/product_management/puma">
                        <button name="controller=create" class="btn btn-primary">Puma</button>
                    </form>
                </td>
                <td>
                    <form method="get" action="/admin/product_management/vans">
                        <button name="controller=create" class="btn btn-primary">Vans</button>
                    </form>
                </td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>
                    <label>Filter By Price:</label>
                </td>
                <td>
                    <form method="get" action="/admin/product_management/price_asc">
                        <button name="controller=create" class="btn btn-primary">Price Ascending</button>
                    </form>
                </td>
                <td>
                    <form method="get" action="/admin/product_management/price_desc">
                        <button name="controller=create" class="btn btn-primary">Price Descending</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
