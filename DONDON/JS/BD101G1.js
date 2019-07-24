function sum( a, b, c){ 
	var total=0;

    for(  i=0; i<arguments.length; i++){
    	total += arguments[i];
    }
	return total;
}	