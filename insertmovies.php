<?php
include('config.php');

$sql = "INSERT INTO `movies` (`PID`, `name`, `genre`, `picture`, `youtube`) VALUES
(1, 'Knocked Up', 'Comedy Drama Romance', 'http://ia.media-imdb.com/images/M/MV5BMTU1Njk0ODEwOF5BMl5BanBnXkFtZTYwMzA3ODc2._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=xlBR-T8gdFo'),
(2, 'The 40-Year-Old Virgin', 'Comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BMTU5MzU2MzY2Nl5BMl5BanBnXkFtZTgwOTM4NzMxMDE@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=s7a_9CggQuE'),
(3, 'Yes Man', 'Comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BNjYyOTkyMzg2OV5BMl5BanBnXkFtZTcwODAxNjk3MQ@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=uRv4CoXQoAQ'),
(4, 'Hitch', 'Comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BNzYyNzM2NzM2NF5BMl5BanBnXkFtZTcwNjg5NTQzMw@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=lp--Un6fNro'),
(5, 'The Ugly Truth', 'Comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BMTM2MTM2OTUwNl5BMl5BanBnXkFtZTcwNTgwNTE0Mg@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=DvsZtGxsvV0'),
(6, 'How to Lose a Guy in 10 Days', 'Comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BMjE4NTA1NzExN15BMl5BanBnXkFtZTYwNjc3MjM3._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=EFGr2_cOOTk'),
(7, '27 Dresses', 'Comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BMzI5OTM0OTg2MF5BMl5BanBnXkFtZTcwNjAyMTU1MQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=VV1-pePln_I'),
(8, 'What Happens in Vegas', 'comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BMTIxNzMwOTU3OF5BMl5BanBnXkFtZTcwMzk0NTM2MQ@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=YJGAsbcfuRs'),
(9, 'No Strings Attached', 'comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BMTg2MDQ1NTEzNl5BMl5BanBnXkFtZTcwOTgxNTMyNA@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=Ubfcfs98MBw'),
(10, 'She''s Out of My League', 'Comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BMTkwMTY5ODA1MF5BMl5BanBnXkFtZTcwODYyNzAxMw@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=oWJJGXvL7PM'),
(11, 'Van Wilder', 'comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BMTcxMjYxNjE5NV5BMl5BanBnXkFtZTcwNDE3MzgzMQ@@._V1_SY317_CR4,0,214,317_.jpg', 'http://www.youtube.com/watch?v=1ODfU4fiifc'),
(12, 'Just Friends', 'Comedy Romance', 'http://ia.media-imdb.com/images/M/MV5BMjA0Mzg2NjUzMl5BMl5BanBnXkFtZTcwNDg2ODUzMQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=5GbWk--Cv0Q'),
(13, 'The Hunger Games', ' Adventure Sci-Fi Thriller ', 'http://ia.media-imdb.com/images/M/MV5BMjA4NDg3NzYxMF5BMl5BanBnXkFtZTcwNTgyNzkyNw@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=SMGRhAEn6K0'),
(14, 'Moneyball', 'Biography | Drama | Sport ', 'http://ia.media-imdb.com/images/M/MV5BMjAxOTU3Mzc1M15BMl5BanBnXkFtZTcwMzk1ODUzNg@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=AiAHlZVgXjk'),
(15, 'Gran Torino', 'DRAMA', 'http://ia.media-imdb.com/images/M/MV5BMTQyMTczMTAxMl5BMl5BanBnXkFtZTcwOTc1ODE0Mg@@._V1_SY317_CR5,0,214,317_.jpg', 'http://www.youtube.com/watch?v=9ecW-d-CBPc'),
(16, 'Good Will Hunting', 'Drama', 'http://ia.media-imdb.com/images/M/MV5BMTk0NjY0Mzg5MF5BMl5BanBnXkFtZTcwNzM1OTM2MQ@@._V1_SY317_CR1,0,214,317_.jpg', 'http://www.youtube.com/watch?v=z02M3NRtkAA'),
(17, 'The Dark Knight', ' Action | Crime | Drama ', 'http://ia.media-imdb.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=yQ5U8suTUw0'),
(18, 'Spy Game', 'Action | Crime | Thriller', 'http://ia.media-imdb.com/images/M/MV5BNjI2OTU4NDcyNl5BMl5BanBnXkFtZTYwNTM2OTU3._V1_SY317_CR1,0,214,317_.jpg', 'http://www.youtube.com/watch?v=EhUNj85HfU4'),
(20, 'The Italian Job', 'Action | Crime | Thriller', 'http://ia.media-imdb.com/images/M/MV5BMTc1MjY1MTA0NV5BMl5BanBnXkFtZTYwNTc5OTU3._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=5Eyw-Qiwpj0'),
(21, 'Live Free or Die Hard', 'Action | Crime | Thriller ', 'http://ia.media-imdb.com/images/M/MV5BNDQxMDE1OTg4NV5BMl5BanBnXkFtZTcwMTMzOTQzMw@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=8Jz-8UcCiws'),
(22, 'The Transporter', 'Action | Crime | Thriller', 'http://ia.media-imdb.com/images/M/MV5BMTk2NDc2MDAxN15BMl5BanBnXkFtZTYwNDc1NDY2._V1_SY317_CR3,0,214,317_.jpg', 'http://www.youtube.com/watch?v=nafEbgWGXdk'),
(23, 'War', 'Action | Crime | Thriller ', 'http://ia.media-imdb.com/images/M/MV5BMTgzNTA4MTc3OF5BMl5BanBnXkFtZTcwOTA0ODk0MQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=g1JugSeVmgI'),
(24, 'The Taking of Pelham 1 2 3', 'Action | Crime | Thriller ', 'http://ia.media-imdb.com/images/M/MV5BMTU3NzA4MDcwNV5BMl5BanBnXkFtZTcwMDAyNzc1Mg@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=ep518FVHKIU'),
(25, 'Captain Phillips', 'Action | Adventure | Biography  ', 'http://ia.media-imdb.com/images/M/MV5BMTQzNzExMDg3Ml5BMl5BanBnXkFtZTgwODU1NzEzMDE@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=_3ASoBrFGlc'),
(26, 'Flight', 'Drama | Thriller', 'http://ia.media-imdb.com/images/M/MV5BMTUxMjI1OTMxNl5BMl5BanBnXkFtZTcwNjc3NTY1OA@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=MlFMZ5D8FNc'),
(27, 'Prisoners', 'Crime | Drama | Thriller', 'http://ia.media-imdb.com/images/M/MV5BMTg0NTIzMjQ1NV5BMl5BanBnXkFtZTcwNDc3MzM5OQ@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=bpXfcTF6iVk'),
(28, 'Machete Kills', 'Action | Crime | Thriller ', 'http://ia.media-imdb.com/images/M/MV5BMjA2MzUxMTM3M15BMl5BanBnXkFtZTgwMzA2NzkxMDE@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=0_IjM63FH2o'),
(29, 'Despicable Me 2', 'Animation | Adventure | Comedy ', 'http://ia.media-imdb.com/images/M/MV5BOTg4NTk2OTg5N15BMl5BanBnXkFtZTcwMDk1MzI2OQ@@._V1._CR243,215.64999389648438,1087,1598.0000305175781_SY317_CR14,0,214,317_.jpg', 'http://www.youtube.com/watch?v=HwXbtZXjbVE'),
(30, 'Now You See Me', 'Crime | Mystery | Thriller ', 'http://ia.media-imdb.com/images/M/MV5BMTY0NDY3MDMxN15BMl5BanBnXkFtZTcwOTM5NzMzOQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=KzJNYYkkhzc'),
(31, 'The Heat', 'Action | Comedy | Crime ', 'http://ia.media-imdb.com/images/M/MV5BNDEwMTg2OTI5MF5BMl5BanBnXkFtZTcwNjgyNjkzOQ@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=ST16k80bDYE'),
(32, 'Kick-Ass 2', 'Action | Comedy | Crime ', 'http://ia.media-imdb.com/images/M/MV5BMTQ4OTQxNzc0N15BMl5BanBnXkFtZTcwOTQxOTU5OQ@@._V1_SY317_CR2,0,214,317_.jpg', 'http://www.youtube.com/watch?v=7UMbwxbgv8U'),
(33, 'R.I.P.D.', 'Action | Comedy | Crime ', 'http://ia.media-imdb.com/images/M/MV5BMTM5OTYxNzE5N15BMl5BanBnXkFtZTcwMDU1MTQ4OQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=DMUjqITqK7Y'),
(34, '2 Guns', 'Action | Comedy | Crime ', 'http://ia.media-imdb.com/images/M/MV5BNTQ5MTgzNDg4OF5BMl5BanBnXkFtZTcwMjAyODEzOQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=dVNe3RK2fgI'),
(35, 'Don Jon', 'Comedy | Drama | Romance ', 'http://ia.media-imdb.com/images/M/MV5BMTQxNTc3NDM2MF5BMl5BanBnXkFtZTcwNzQ5NTQ3OQ@@._V1._CR28,28.649993896484375,1271,1991.0000305175781_SX214_.jpg', 'http://www.youtube.com/watch?v=rTmappTfRfo'),
(36, 'Crazy, Stupid, Love.', 'Comedy | Drama | Romance ', 'http://ia.media-imdb.com/images/M/MV5BMTg2MjkwMTM0NF5BMl5BanBnXkFtZTcwMzc4NDg2NQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=0ybVn905IMQ'),
(37, 'Jackass Presents: Bad Grandpa', 'Comedy', 'http://ia.media-imdb.com/images/M/MV5BMTg4NjIwMTI5OV5BMl5BanBnXkFtZTgwNjU1MTMyMDE@._V1_SY317_CR1,0,214,317_.jpg', 'http://www.youtube.com/watch?v=H3-d-CWwBSg'),
(38, 'Ted', 'Comedy | Fantasy', 'http://ia.media-imdb.com/images/M/MV5BMTQ1OTU0ODcxMV5BMl5BanBnXkFtZTcwOTMxNTUwOA@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=9fbo_pQvU7M'),
(39, 'The Campaign', 'Comedy | Politics', 'http://ia.media-imdb.com/images/M/MV5BMTY0NjI3MzM2Nl5BMl5BanBnXkFtZTcwNDgxNjA5Nw@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=omcm3VCVpag'),
(40, 'Horrible Bosses', 'Comedy | Crime', 'http://ia.media-imdb.com/images/M/MV5BNzYxNDI5Njc5NF5BMl5BanBnXkFtZTcwMDUxODE1NQ@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=VpUeQV8sdOc'),
(41, 'The Change-Up', 'Comedy', 'http://ia.media-imdb.com/images/M/MV5BMTk3NTM4NDg3OF5BMl5BanBnXkFtZTcwNDk3MzEwNQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=K_IRHW-CH3k'),
(42, 'Role Models', 'Comedy', 'http://ia.media-imdb.com/images/M/MV5BMTg3MTk4NzQ0NV5BMl5BanBnXkFtZTcwNjM0OTc5MQ@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=Kd9WJnV9Gek'),
(43, 'The Wolf of Wall Street', 'Biography | Crime | Drama ', 'http://ia.media-imdb.com/images/M/MV5BMTQ5OTI2MTQ1MV5BMl5BanBnXkFtZTcwMjY0Njk2OQ@@._V1_SY317_CR1,0,214,317_.jpg', 'http://www.youtube.com/watch?v=cz_J-DKNHMo'),
(44, 'Ender''s Game', 'Action | Adventure | Sci-Fi', 'http://ia.media-imdb.com/images/M/MV5BMjAzMzI5OTgzMl5BMl5BanBnXkFtZTgwMTU5MTAwMDE@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=vP0cUBi4hwE'),
(45, 'After Earth', 'Action | Adventure | Sci-Fi ', 'http://ia.media-imdb.com/images/M/MV5BMTY3MzQyMjkwMl5BMl5BanBnXkFtZTcwMDk2OTE0OQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=L-EYSKb0588'),
(46, 'Oblivion', 'Action | Adventure | Mystery', 'http://ia.media-imdb.com/images/M/MV5BMTQwMDY0MTA4MF5BMl5BanBnXkFtZTcwNzI3MDgxOQ@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=EdzpNH0DNZ4'),
(47, 'Looper', 'Action | Crime | Sci-Fi ', 'http://ia.media-imdb.com/images/M/MV5BMTY3NTY0MjEwNV5BMl5BanBnXkFtZTcwNTE3NDA1OA@@._V1_SY317_CR15,0,214,317_.jpg', 'http://www.youtube.com/watch?v=0uIWGOKW5OM'),
(48, 'I Am Number Four', 'Drama | Romance | Sci-Fi ', 'http://ia.media-imdb.com/images/M/MV5BMjI0NDI1MTMyM15BMl5BanBnXkFtZTcwMDMzMTcyNA@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=KGeY935_9xw'),
(49, 'Last Vegas', 'Comedy', 'http://ia.media-imdb.com/images/M/MV5BMTQ2ODg2MTIyNF5BMl5BanBnXkFtZTgwMzU2NjgwMDE@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=TvK3m0wJutI'),
(50, 'Free Birds', 'Animation | Comedy', 'http://ia.media-imdb.com/images/M/MV5BNjE0NjIwMzAwOF5BMl5BanBnXkFtZTgwOTIyMzMzMDE@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=UhxSOkTFGvo'),
(51, 'About Time', 'Comedy | Drama | Sci-Fi', 'http://ia.media-imdb.com/images/M/MV5BMTA1ODUzMDA3NzFeQTJeQWpwZ15BbWU3MDgxMTYxNTk@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=T7A810duHvw'),
(52, 'Dallas Buyers Club', 'Drama', 'http://ia.media-imdb.com/images/M/MV5BMTYwMTA4MzgyNF5BMl5BanBnXkFtZTgwMjEyMjE0MDE@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=fvMPU0WaPcc'),
(53, 'Diana', 'Biography | Drama | Romance', 'http://ia.media-imdb.com/images/M/MV5BMjA0NDg0Njg3N15BMl5BanBnXkFtZTgwMTMxMzMzMDE@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=9VSUoxic5E4'),
(54, 'Mr. Nobody', 'Drama | Fantasy | Romance', 'http://ia.media-imdb.com/images/M/MV5BMTg4ODkzMDQ3Nl5BMl5BanBnXkFtZTgwNTEwMTkxMDE@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=mpi0qsp3v_w'),
(55, 'Troy', 'Adventure | Drama', 'http://ia.media-imdb.com/images/M/MV5BMTk5MzU1MDMwMF5BMl5BanBnXkFtZTcwNjczODMzMw@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=Voai-4GS848'),
(56, '300: Rise of an Empire', 'Adventure | Drama ', 'http://ia.media-imdb.com/images/M/MV5BMTEwNTU2MjAwMDdeQTJeQWpwZ15BbWU3MDk2Njc2Njk@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=2zqy21Z29ps'),
(57, '', 'Adventure | Drama ', 'http://ia.media-imdb.com/images/M/MV5BNTQ2NzI0ODc5MV5BMl5BanBnXkFtZTcwMTA0MTk3OA@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=ol67qo3WhJk'),
(58, 'Robin Hood', 'Adventure | Drama ', 'http://ia.media-imdb.com/images/M/MV5BMTM5NzcwMzEwOF5BMl5BanBnXkFtZTcwNjg5MTgwMw@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=WOJ0NIDGNgc'),
(59, 'Braveheart', 'Adventure | Drama ', 'http://ia.media-imdb.com/images/M/MV5BNjA4ODYxMDU3Nl5BMl5BanBnXkFtZTcwMzkzMTk3OA@@._V1_SX214_.jpg', 'http://www.youtube.com/watch?v=vbnGDeq40hI'),
(60, 'Superman Returns', 'Action | Crime | Drama', 'http://ia.media-imdb.com/images/M/MV5BMTU3NzA5MjI0Nl5BMl5BanBnXkFtZTcwMTEwNzMzMQ@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=v4IOoyrfi0s'),
(61, 'Avatar', 'Action | Crime | Drama ', 'http://ia.media-imdb.com/images/M/MV5BMTYwOTEwNjAzMl5BMl5BanBnXkFtZTcwODc5MTUwMw@@._V1_SY317_CR0,0,214,317_.jpg', 'http://www.youtube.com/watch?v=cRdxXPV9GNQ');
";

 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  

    echo "Thank You, I will contact you as soon as possible.";
    }
    else
    {
        echo "Please Enter a valid email";
    }

?>