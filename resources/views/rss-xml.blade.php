
<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
    	@foreach($blogs as $post)
        <title> {{$post->blog_title}} </title>
        <link><![CDATA[ https://your-website.com/feed ]]></link>
        <description><![CDATA[ Your website description ]]></description>
        <language>en</language>
       

        
            <item>
                <title><![CDATA[{{ $post->blog_title }}]]></title>
                <link>https://www.idotcommers.com/{{$post->blog_url}}</link>
                <description>
    <![CDATA[{!! <?php echo htmlspecialchars ($post->description);?> !!}]]></description>
                <category>{{ $post->blog_category }}</category>
                <author><![CDATA[{{ $post->author_name  }}]]></author>
                
                <pubDate>{{ $post->created_at }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
