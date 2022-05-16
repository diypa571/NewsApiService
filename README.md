# NewsApiService
Creating a news api service using php &amp; mysqli<br>

# Creating the news database table
CREATE TABLE `news` (<br>
  `id` int(11) NOT NULL,<br>
  `title` text NOT NULL,<br>
  `summary` text NOT NULL,<br>
  `content` longtext NOT NULL,<br>
  `author` text DEFAULT NULL,<br>
  `image` text DEFAULT NULL,<br>
  `date` varchar(100) NOT NULL<br>
) ENGINE=MyISAM DEFAULT CHARSET=utf8;<br>

