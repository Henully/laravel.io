<?php
namespace Lio\Forum;

use Illuminate\Database\Eloquent\Model;
use Lio\Replies\MorphManyReplies;
use Lio\Replies\ReplyAble;

final class EloquentThread extends Model implements Thread, ReplyAble
{
    use MorphManyReplies;

    /**
     * @var string
     */
    protected $table = self::TYPE;

    /**
     * @var string
     */
    protected $morphClass = self::TYPE;

    /**
     * @return int
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function subject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function slug()
    {
        return $this->slug;
    }
}