<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">ADD BLOG</h6>
                    <form class="form-horizontal" method="post" action="<?= base_url('blog_detail/blog_detail_submit_data'); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="title" class="form-label">SEO Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="SEO Title" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="keywords" class="form-label">SEO Keywords <span class="text-danger">*</span></label>
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="SEO Keywords" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="blog_name" class="form-label">Blog Name <span class="text-danger">*</span></label>
                                <input type="text" id="blog_name" class="form-control" name="blog_name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                <textarea name="slug" class="form-control" id="slug" placeholder="Slug" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="meta_description" class="form-label">SEO Description <span class="text-danger">*</span></label>
                                <textarea name="meta_description" class="form-control" id="meta_description" placeholder="SEO Description" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="blog_image" class="form-label">Blog Image <span class="text-danger">*</span></label>
                                <input type="file" name="blog_image" class="form-control" id="blog_image" required>
                            </div>
                            <!-- <div class="form-group col-md-12">
                                <label for="blog_category" class="form-label">Blog Category <span class="text-danger">*</span></label>
                                <select id="blog_category" class="form-control" name="blog_category" required>
                                    <option value="">Select Blog Category</option>
                                    <?php foreach ($blog_category_data as $data) { ?>
                                        <option value="<?= $data['id']; ?>"><?= $data['category']; ?></option>
                                    <?php } ?>
                                </select>
                            </div> -->
                            <div class="form-group col-md-12">
                                <label for="blog_category" class="form-label">Blog category <span class="text-danger">*</span></label>
                                <input type="text" name="blog_category" class="form-control" id="blog_category" placeholder="Blog category" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="blog_author" class="form-label">Blog Author <span class="text-danger">*</span></label>
                                <input type="text" name="blog_author" class="form-control" id="blog_author" placeholder="Blog Author" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="blog_date" class="form-label">Blog Date <span class="text-danger">*</span></label>
                                <input type="date" name="blog_date" class="form-control" id="blog_date" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="blog_desc" class="form-label">Blog Description <span class="text-danger">*</span></label>
                                <textarea style="background-color:aquamarine;" name="blog_desc" class="form-control" id="blog_desc" placeholder="Blog Description" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="long_desc" class="form-label">Blog Long Description <span class="text-danger">*</span></label>
                                <textarea name="long_desc" class="form-control" id="long_desc" placeholder="Blog Long Description" required></textarea>
                            </div>
                        </div>
                        <div class="widget-footer text-left">
                            <button type="submit" name="submit" value="Add blog_detail" class="btn btn-primary" style="margin: 10px;">Add</button>
                            <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('long_desc');
    CKEDITOR.replace('blog_desc');
</script>
