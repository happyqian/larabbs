<div class="media">
    <div class="avatar pull-left">
        <a href="{{ route('users.show',$notification->data['user_id']) }}">
            <img style="width:48px;height:48px;" src="{{ $notification->data['user_avatar'] }}" alt="{{ $notification->data['user_name'] }}" class="media-object img-thumbnail">
        </a>
    </div>
    
    <div class="infos">
        <div class="media-heading">
            <a href="{{ route('users.show',$notification->data['user_id']) }}">{{ $notification->data['user_name'] }}</a>
            评论了
            <a href="{{ $notification->data['topic_link'] }}">{{ $notification->data['topic_title'] }}</a>

            {{-- 回复删除按钮 --}}
            <span class="meta pull-right">
                <span title="{{ $notification->created_at }}" class="glyphicon glyphicon-clock" aria-hidden="true"></span>
                {{ $notification->created_at->diffForHumans() }}
            </span>
        </div>
        <div class="reply-content">
            {!! $notification->data['reply_content'] !!}
        </div>
    </div>
</div>