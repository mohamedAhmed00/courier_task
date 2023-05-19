courier multi supplier problem 

we can follow one from this solution to solve this problem: 

1- implement each supplier standalone and depends on adabter design pattern and factory to switch between each adapter.
2- implmenet solution that depend on abstract factory, thats mean we make interface to provide 2 method one for create shipment
and second for track status. each operation will move us to specific implementation based on the courier type then we use factory as client to switch to each courier .

this solution i used service layer as interation between controller and supplier.
