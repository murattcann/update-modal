# update-modal
This package developed for edit-update any database field with Bootstrap modal and JQuery/Ajax.

<ul> 
  <li><a href="#installation">Installation</a></li>
  <li><a href="#get-started">Get Started </a></li>
  <li>
    <a href="#installation">Usage With Html Table</a>
    <ul>
        <li><a href="#including-modal">Including Package Views</a></li>
    </ul>
  </li>
   
  <li><a href="#installation">Usage With yajrabox/datatable</a></li>
 
</ul>


## <span id="installation"> Installation </span>

<pre> composer require murattcann/update-modal </pre>

## <span> Get Started</span>
<p> This package provides you to update any field in the table without refresh page. 
You can use this to update any kind of database table field as live. Lets get started!
</p>

## <span> Usage With yajrabox/datatables </span>
  
## <span> Usage With Html Table </span>
<p>I assume you have products table like this:</p>
<img src="https://github.com/murattcann/update-package-readme-images/blob/master/productsIndexWithoutPackage.png" width="60%" height="30%"> 

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/htmlTableWithoutPacage.png" width="60%" height="20%"> 

> Note: "tr" tag in the @foreach loop must have id as product id. 
This feature provides us to change table cell that we changed.

### <span id="including-modal"> Including Modal </span>

<p>You should include modal view to the top index page and pass "modalTitle" parameter to this view. 
This parameter our modals new title. You can just write "Edit". </p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/includeModal.png" width="60%" height="20%"> 

<p>You should include js blade view to the bottom of index page. </p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/includeJS.png" width="60%" height="20%"> 

<p>Now you should include button blade view to the corresponding table <code> td </code> tag with with specified parameters like this: </p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/htmlTableWithPackage.png" width="60%" height="20%"> 

<p>The process we just did should give us this result on the index page:</p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/productsIndex.png" width="60%" height="20%"> 

<p> As you can see, we can edit-update title and price title. </p>
<p> If you click price to edit you would see the modals input type is number. 
It is because of "inputType" parameter which we passed to included view.</p>
<p> If you click title to edit you would see the modals input type is textarea. This is because of same reason. We did it.</p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/priceClicked.png" width="50%" height="20%"> 
<img src="https://github.com/murattcann/update-package-readme-images/blob/master/titleClicked.png" width="50%" height="20%"> 

    
# To be continued...
