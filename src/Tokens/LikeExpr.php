<?php
namespace CP\Filter\Tokens;

class LikeExpr extends BinaryExpression{
    public function apply($data)
    {
        return (bool) preg_match(sprintf('/^%s$/i', $this->right->apply($data)), $this->left->apply($data));
    }
}
