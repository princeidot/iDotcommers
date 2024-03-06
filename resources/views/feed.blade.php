<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ DevDojo ]]></title>
        <link><![CDATA[ https://your-website.com/feed ]]></link>
        <description><![CDATA[ Your website description ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>

        @foreach($data as $post)
            <item>
                <title><![CDATA[{{ $post->blog_title }}]]></title>
                <link>https://localhost/idot</link>
                <description><![CDATA[{!! $post->blog_category !!}]]></description>
                <category>{{ $post->blog_url }}</category>
                <author><![CDATA[{{ $post->author_name  }}]]></author>
                <guid>{{ $post->id }}</guid>
                <pubDate>{{ $post->created_at }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
