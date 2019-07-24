        <form action="cart_add.php">
        <input type="hidden" name="psn" value="<?php echo $prodRow["psn"]; ?>">
        <input type="hidden" name="pname" value="<?php echo $prodRow["pname"]; ?>">
        <input type="hidden" name="price" value="<?php echo $prodRow["price"]; ?>">
    	<tr>
	    <td><?php echo $prodRow["psn"]; ?></td>
	    <td><a href="prodQuery.php?psn=<?php echo $prodRow["psn"]; ?>"><?php echo $prodRow["pname"]; ?></a></td>
	    <td><?php echo $prodRow["price"]; ?></td>
        <td><?php echo $prodRow["author"]; ?></td>
        <td><img width="50" src="images/<?php echo $prodRow["image"];?>"></td>
        <td><input type="submit" value="放入購物車"></td>
	    </tr> 
        </form> 