# update-modal Package To Edit Any Table Cell With Laravel, Ajax, Jquery and Bootstrap
This package developed for edit-update any database field with Bootstrap modal and JQuery/Ajax.

<ul> 
  <li><a href="#installation">Installation</a></li>
  <li><a href="#get-started">Get Started </a></li>
  <li>
    <a href="#usage-with-html-table">Usage With Html Table</a>
    <ul>
        <li><a href="#including-modal">Including Package Views</a></li>
    </ul>
  </li>
   
  <li><a href="#usage-with-yajrabox">Usage With yajrabox/datatable</a></li>
 
</ul>


## <span id="installation"> Installation </span>

<pre> composer require murattcann/update-modal </pre>

## <span> Get Started</span>
<p> This package provides you to update any field in the table without refresh page. 
You can use this to update any kind of database table field as live. Lets get started!
</p>

## <span id="usage-with-html-table"> Usage With Html Table </span>
<p>I assume you have products table like this:</p>
<img src="https://github.com/murattcann/update-package-readme-images/blob/master/productsIndexWithoutPackage.png" width="60%" height="30%"> 

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/newhtmlTableWithoutPacage.png" width="60%" height="20%"> 

### <span id="including-modal"> Including Modal </span>

<p>You should include modal view to the top index page and pass "modalTitle" parameter to this view. 
This parameter our modals new title. You can just write "Edit". </p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/includeModal.png" width="60%" height="20%"> 

<p>You should include js blade view to the bottom of index page. </p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/includeJS.png" width="60%" height="20%"> 

<p>Now, you should include button blade view to the corresponding table <code> td </code> tag with with specified parameters like this: </p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/newhtmlTableWithPackage.png" width="60%" height="20%"> 

<p>The process we just did should give us this result on the index page:</p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/productsIndex.png" width="60%" height="20%"> 

<p> As you can see, we can edit-update title and price title. </p>
<p> If you click price to edit you would see the modals input type is number. 
It is because of "inputType" parameter which we passed to included view.</p>
<p> If you click title to edit you would see the modals input type is textarea. This is because of same reason. We did it.</p>

<img src="https://github.com/murattcann/update-package-readme-images/blob/master/priceClicked.png" width="50%" height="20%"> 
<img src="https://github.com/murattcann/update-package-readme-images/blob/master/titleClicked.png" width="50%" height="20%"> 

## <span id="usage-with-yajrabox"> Usage With yajrabox/datatables </span>

<p> 
    If you use yajrabox datatables package you can also integrate for this. But there is a little bit difference between traditional html tables and yajrabox datatable.
    You know, yajrabox package is rendering table view on server side. So, you haven't got a table which you can edit on the view files.
</p>

<p>
    Yajrabox package generates table from server side and you should only write <code>{!! $dataTable->table() !!}</code> 
    on view page that you would like to use. As you can see, there is no html table to edit cells. So, how can we do this editing things in this case? Lets get started.
</p>

<p> I assueme you have services table like this:</p>
<img src="https://github.com/murattcann/update-package-readme-images/blob/master/yajra/index.png" width="50%" height="20%"> 

<p> Now, we should have a helper to generate button as we want.</p>
<p> Let's say, I want to edit priority field with this package.</p>
<p>We must have some functions to do so. </p>
<img src="https://github.com/murattcann/update-package-readme-images/blob/master/yajra/newactionButtonClass.png" width="50%" height="20%"> 
<img src="https://github.com/murattcann/update-package-readme-images/blob/master/yajra/actionButtonClass2.png" width="50%" height="20%"> 

<p>After this step, you should edit <code>ServiceDataTable.php</code> file according to your wish.
As I said before, I want to edit priority field. So, I should make such a change:
</p>
<img src="https://github.com/murattcann/update-package-readme-images/blob/master/yajra/newserviceDataTable.png" width="50%" height="20%"> 

<p>This is the different side of yajrabox. Other steps are same with html table.</p>
<p>Now, you should include modal view and update blade file as we did before.</p>

>If you encounter any errors or problems, contact with me.

