<?php

class Blog_detail_model extends CI_Model
{
    public function blog_detail_data_submit($data, $blog_image)
    {
        $data = [
            'title' => $data['title'],
            'keywords' => $data['keywords'],
            'slug' => $data['slug'],
            'meta_description' => $data['meta_description'],
            'blog_name' => $data['blog_name'],
            'blog_image' => $blog_image,
            'blog_category' => $data['blog_category'],
            'blog_author' => $data['blog_author'],
            'blog_date' => $data['blog_date'],
            'blog_desc' => $data['blog_desc'],
            'long_desc' => $data['long_desc'],
        ];
        if ($this->db->insert('blog_detail', $data)) {
            return $data;
        } else {
            return false;
        }
    }

    public function blog_detail_view()
    {
        $result = $this->db->query("SELECT * FROM blog_detail ORDER BY blog_date DESC");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return [];
        }
    }

    public function blog_detail_data_nm($slug)
    {
        $result = $this->db->query("
            SELECT * 
            FROM blog_detail 
            WHERE REPLACE(LOWER(slug), ' ', '-') = ?", [$slug]);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return [];
        }
    }

    public function blog_detail_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('blog_detail');
    }

    public function blog_detail_update_data($data, $blog_image)
    {
        $newdata = [
            'title' => $data['title'],
            'keywords' => $data['keywords'],
            'slug' => $data['slug'],
            'meta_description' => $data['meta_description'],
            'blog_name' => $data['blog_name'],
            'blog_image' => $blog_image,
            'blog_category' => $data['blog_category'],
            'blog_author' => $data['blog_author'],
            'blog_date' => $data['blog_date'],
            'blog_desc' => $data['blog_desc'],
            'long_desc' => $data['long_desc'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('blog_detail', $newdata)) {
            return $newdata;
        } else {
            return false;
        }
    }

    public function blog_detail_edit($id)
    {
        $result = $this->db->query("SELECT * FROM blog_detail WHERE id = ?", [$id]);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return [];
        }
    }

    public function blog_category_fetch()
    {
        $result = $this->db->query("SELECT * FROM blog_category");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return [];
        }
    }

    public function get_recent_blogs($limit = 3)
    {
        $result = $this->db->query("
            SELECT * 
            FROM blog_detail 
            ORDER BY blog_date DESC 
            LIMIT ?", [$limit]);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return [];
        }
    }
	public function blog_detail_data_seo()
{
	$uid = $this->uri->segment(2);
    $result = $this->db->query("SELECT * FROM blog_detail WHERE REPLACE(LOWER(slug), ' ', '-')='$uid' ORDER BY blog_detail.blog_date DESC");
    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}
}
