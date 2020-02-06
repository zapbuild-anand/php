<?php
    class Node
    {
        function __construct($item)
        {
            $this->key=$item;
            $this->left=null;
            $this->right=null;
        }

    }
    function insert($root,$node)
    {
        if($root==null)
        {
            $root=$node;
        }
        else
        {
            if($root->key < $node->key)
            {
                if($root->right==null)
                    $root->right=$node;
                else
                    insert($root->right,$node);
            }
            else
            {
                if($root->left==null)
                    $root->left=$node;
                else
                    insert($root->left,$node);
            }
        }
    }
    function inOrder($root)
    {
        if($root!=null)
        {
            inOrder($root->left);
            echo "$root->key \n";
            inOrder($root->right);
        }
    }
    function search($root,$item)
    {
        if($root!=null)
        {
            if($root->key==$item)
            {
                return true;
            }
            if($root->key > $item)
                return search($root->left,$item);
            return search($root->right,$item);
        }
        else
            return false;
    }
    $r=new Node(50);
    insert($r,new Node(30));
    insert($r,new Node(40));
    insert($r,new Node(90));
    insert($r,new Node(70));
    insert($r,new Node(60));
    insert($r,new Node(80));
    inOrder($r);
    $item=35;
    $res=false;
    $res=search($r,$item);
    if($res)
        echo $item." Found";
    else
    echo $item." Not found";

?>