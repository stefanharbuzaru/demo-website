<div class="modal fade details-4" id="details-4" tableindex="-1" role="dialog" aria-labelledby="details-4" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title text-center">Shoe 1</h4>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div class="center-block">
              <img src="images/shoe1.jpg" width="200" height="300" alt="Shoe 1" class="details img-responsive" />
            </div>
          </div>
          <div class="col-sm-6">
            <h4>Details</h4>
            <p>Theese are very good pants</p>
            <hr />
            <p>Price: $25</p>
            <p>Brand: NoName</p>
            <form action="add_cart.php" method="post">
              <div class="form-group">
                <div class="col-xs-3">
                  <label for="quantity" id="quantity-label">Quantity:</label>
                  <input type="text" class="form-control" id="quantity" name="quantity" />
                </div><br /><br />
                <div class="form-group">
                  <label for="size">Size:</label>
                  <select class="form-control" name="size" id=size>
                    <option value=""></option>
                    <option value="30">30</option>
                    <option value="32">32</option>
                    <option value="34">34</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-default" data-dismiss="modal">Close</button>
      <button class="btn btn-warning" type="submit"><span class="glyphicon-shopping-cart"></span>Add to cart</button>
    </div>
  </div>
 </div>
</div>
