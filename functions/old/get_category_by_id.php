
<h2>get_category_by_id</h2>
<p class="description">get_category_by_id — returns category data as array or false</p>
<h3>Summary</h3>
<pre class="prettyprint"><code class="language-php">get_category_by_id($id);
</code></pre>
<h3>Return Values</h3> 
 <p>
<code>Array</code> with the category data or <code>false</code> if the category is found.</p>






<h3>Usage</h3>
<pre class="prettyprint"><code class="language-php">
//get a category  
$category_data = get_category_by_id(23);
var_dump($category_data); 

if($category_data != false){
	print $category_data['title'];  
	print $category_data['id'];
	print $category_data['parent'];
	print $category_data['position'];
	print $category_data['created_at']; 
	// and more... print_r($category_data);
}
</code></pre>
<h4>See also</h4>
<?php print page_content('functions/_nav/categories'); ?>