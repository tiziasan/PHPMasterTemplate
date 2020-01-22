<?php
class news{
    function insertNews($title, $category, $description, $img="https://images.pexels.com/photos/442559/pexels-photo-442559.jpeg?auto=compress&cs=tinysrgb"){
        $component = "<div class=\"my-2 mx-auto p-relative bg-white shadow-1 blue-hover\">
                            <img src=".$img." alt=\"Man with backpack\" class=\"d-block w-full\">
                            <div class=\"px-2 py-2\">
                                <p class=\"mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px\">
                                ".$category."
                                </p>
                                <h1 class=\"ff-serif font-weight-normal text-black card-heading mt-0 mb-1\" >
                                ".$title."
                                </h1>
                                <p class=\"mb-1\">
                                ".$description."
                                </p>
                            </div>
                            <a href=\"#0\" class=\"text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link\">
                            Read More
                            </a>
                        </div> ";
        echo $component;
    }




}
