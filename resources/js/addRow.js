$(function () {
    var cnt = 0;
    $("#add").on("click", function () {
        event.preventDefault();
        cnt++;
        $("#tableBody").append(
            `
            <tr class="bg-white">
             <td>` +
                cnt +
                `</td>
                  <td class="col-2"><input class="form-control" type="text" id="product_name" name="product_name[]"></td>
                   <td class="col-2"><textarea class="form-control " type="text" id="description" name="description[]">
                  </textarea>
                  </td>
                  <td class="col-1"><input class="form-control" type="number" id="due" name="quantity[]"></td>
                  <td class="col-1"><input class="form-control" type="number" id="due" name="unit_price[]"> <span>cent</span></td>
                 <td class="col-2">123</td>
                 <td class="col-2"><i class="fa fa-trash-o"></i></td>
                 </tr>
        `
        );
    });
});
