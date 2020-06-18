
create table tb_admin(
	id_admin int(11) not null auto_increment,
	nama varchar(100) not null,
	alamat text,
	email varchar(50) not null,
	hp varchar(25),
	username varchar(30) not null,
	password varchar(100) not null,
	primary key(id_admin)
);

create table tb_artist(
	artist_id smallint(5) not null auto_increment,
	artist_name char(128),
	primary key(artist_id)
);

create table tb_album(
	album_id smallint(5) not null auto_increment,
	artist_id smallint(4),
	album_name char(128),
	primary key(album_id),
	foreign key(artist_id) references tb_artist(artist_id)
);

create table tb_track(
	track_id smallint(3) not null auto_increment,
	track_name char(128),
	artist_id smallint(5),
	album_id smallint(4),
	time decimal(5.2),
	primary key(track_id),
	foreign key(artist_id) references tb_artist(artist_id),
	foreign key(album_id) references tb_album(album_id)
);

create table tb_played(
	artist_id smallint(5),
	album_id smallint(4),
	track_id smallint(3),
	played timestamp,
	foreign key(artist_id) references tb_artist(artist_id),
	foreign key(album_id) references tb_album(album_id),
	foreign key(track_id) references tb_track(track_id)
);
