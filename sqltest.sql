use testsql;
		


-- update orders inner join product on orders.product_id = product.product_id
-- set orders.total = orders.soluong * product.price
-- where soluong = 3
-- ;
update orders set total = 10000 where soluong = 3;

select *from orders;