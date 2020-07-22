@extends('layout.index')
@section('content')
<div class="main cre">
	<div class="container">
		<div class="list-mn over">
			<ul class="ul">
				<li><a href="">Trang chủ</a></li>
				<li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>

				<li class="active"><a> KHÁCH HÀNG</a></li>
			</ul>
		</div>
		<div class="row row-s">
			<div class="col-xs-12 col-sm-9 col-s">
				<div class="main-content show-itemx">
					<h1>KHÁCH HÀNG</h1>
					<div class="news-list" id="page-new">
						<div class="news">
							<div class="img">
								<a href="/y-kien-khach-hang/lionel-messi" title="Đức Anh"><img
										src="https://thuthuatnhanh.com/wp-content/uploads/2018/07/anh-avatar-dep.jpg"></a>
							</div>
							<div class="desc">
								<h3><a href="/y-kien-khach-hang/lionel-messi" title="Đức Anh">Thành Đạt</a></h3>
								<div class="time"><i class="fa fa-clock-o color-red"></i> 11/12/2019</div>
								<div class="short-desc">
									<p></p>
								</div>
								<a href="/y-kien-khach-hang/lionel-messi" title="Đức Anh" class="btn-detail">Chi
									tiết</a>
							</div>
						</div>
						<div class="news">
							<div class="img">
								<a href="/y-kien-khach-hang/cristiano-ronaldo" title="TÙNG MESSI"><img
										src="data:image/jpeg;base64,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"></a>
							</div>
							<div class="desc">
								<h3><a href="/y-kien-khach-hang/cristiano-ronaldo" title="TÙNG MESSI">Chí Bảo</a>
								</h3>
								<div class="time"><i class="fa fa-clock-o color-red"></i> 11/12/2019</div>
								<div class="short-desc">
									<p></p>
								</div>
								<a href="/y-kien-khach-hang/cristiano-ronaldo" title="TÙNG MESSI" class="btn-detail">Chi
									tiết</a>
							</div>
						</div>
						<div class="news">
							<div class="img">
								<a href="/y-kien-khach-hang/duong-duy-thanh" title="Dương Duy Thanh"><img
										src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxASEhUSEhIWFhUXFxYYFhgWGBcaFxkZGBgXFhUZFhcdHSggGB0lGxUVITEhJikrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGzUmICUvLS0vLzItLS0tLy0tLS0tNS0tLS0tLS4tNS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAPMA0AMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYBAwQHAgj/xABHEAACAQIDBQUCCwUHAgcAAAABAgMAEQQSIQUxQVFhBhMicYEykQcjM0JSYnKCkqGxFKKywdEVJFNjc4PCQ/AWVHSEo7PS/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAMCBAUBBv/EACoRAAICAQQBBAICAgMAAAAAAAABAgMRBBIhMUETIlFhBXEysRRCI4Gh/9oADAMBAAIRAxEAPwD3GlKUAKUpQApSuTae0IsPE0srZUUXJ/QDmSdLUAdLOBvIHDXnX1X537XdrpsbNnuVRT8WgO4czzY869l7B7e/bMIkhN5F8En2hx9RY++lxsUngfZRKEVJljpSlMEClKUAKUpQApSlAClKUAKUpQApSlAClKUAKUpQApSlAClKUAK8V+FztGZZ/wBlRvi4vat85+N/Ld769c21tAYeCWY/MQt5n5o9TYeteAbN7OY3HOzpGSGYlpG8K3JuTmO/0vVfUWKK5Zb0sVnc/BXqvfwSba7nF9yx8Ewy9Mw1Q++4+9Uts74JxvnxHpGv/Jv6V2474PMNh0M0Mkvep4o7sts41W4C8xVBautSRanOE1t+T08VmuLZ+PSSCOe4CuivcnQXAOprhk7T4e5WLPOw4QqXHq/sD31qynGKy2Ze19E3SoA7Sxz+xh44xzmkzN+CMW/er5OHxre3iwvSKJR+bljVWWupj5JemywXpeq9/ZDH28ViW/3Av8Civn+zZ49YMVIPqzHvUPv8Q9Gpa/JVZwd9P7LJSoBO0DReHFxd1w71PHCfNt8f3hbrU5HIGAKkEHUEagjmDV2FkZrMXkg4tdn3SlKmcFKUoAUpSgBSlKAFKUoAUpSgBSlKAK/2pUStBhiLrJIXkB3FIhmII5Fig9akFUAAAAAaADcPKo4+PHSnhFEiDzkJdvyVKk68/wDkLN1zXwWIrCQqO2y5yqqjM7HwqONt5J4KLi568SQD2zSZVLWJsL2AuT0A4mtOCgIu7/KNbNyA4Ip5C/qSTxqiSi8PJEbL7LxoirMzTBSSqMT3SXJaypuNr72ufLdU+iACwAAG4DQe6sd4L5bi9r2423XtyvX3UpTlLtnG8mKzStU86plv85go8zf+hqIG2lYrnw7y5iHVbcGU6HoVOoPvHWjAHQygixFwd96gp9nzYa74Nwq72ge5iPPLxjPlp0qdpTK7Z1vMWCZzbB28mIzIVMcye3GxBI5Mp3Op5j8qmKpu1tjTPIrwAI6EMkpa1r+0tgCWU7iDapEJtA78RCv2YCfzaStmr8jBx9/DIzqWfa+Cw0qv9zjv/NR+sH9JKBtoD/qYdvOORfzDmmLX0PyQ9NlgpVH2x28fBSLHi8OPEMwaF8wtcg6Mo1051J7J7dbPxFgs4RvoyeA+8+E++rMLYTWUwdU0s4LLSsKwIuDcHcRWaYLFKUoAUpSgBWCazWDQBXtjeJ8TJ9LEOPSNVjH8JqUqL2B7Mo5YjEf/AGMf51KV5fUPNsv2WTBrRh8ZFJfu5Ee2/KwNvOx0ri7TKxw5ABIzJnA1Pd5hn0G8WvfpeofZDo+IiMRUhA+cpYgIVICkjTVshA+rfhRCpSg5Z6GxrTg5Z6LLBhQrO97s5Gp4ACyqOguT5saxj4GdfC2VgQynhccGHEEXB861bT2pFAoLm5PsqurMfqj+Z0FVfG7Rxk+49yn0VNm9XHi92X1qEYN8hXTKfRZJMZOBrCiniWlAT35c1vu1oweIhaQPJiYpJBcKqMuVL6HKLklraZjw3AXN6iuyUJJZgxB10BN9+pOt7Ee+vr+yDYO1+6dmRN3tJfNm042e32DzpyqTT5HvSpdyPRKzVDwaSRH4mdltvXQrzsU3DQjgD1qewW37aTqF+ut8n3gdU9bjrSpV46FT084/ZydoJvjyssjImQGMByitvzkkEZiNNDuFjxqU7Nu7Q3YsRmbuy18xTTKTfU63AJ1IAPGpFlVgLgMNCNxHQitldlYnBRwQdmYKOBSlKULFKUoA82+GfC3jw8vJnQ/eAYfwmvKQa9o+F2O+CB5Sp+auK8XAvWrpHmsvUP2E1sPtVjMIR3UrBfonVD906V7z2Q2w+LwqTumRmuCBuNja634H+VeWdhvg7lxBWbEgpDoQNzP5ch193OvacPAqKEQBVUAKBoABuArTqUvJT1UoN4j2bKUpTioKUpQApSlAFd2PpJik5Yhj6OiP/wAjUpUXgwDjMWRuvAp+0EJP5MlSleZ1SxdL9lkVF7a2qmHQnQtYkDhYe0zdB+egrr2hi1iQu1zbcBvZjoqjqTVMx5ZrFzd5JEzHhYHPlH1QqkepO8ml1xy+R9FPqPno+1ZvlZATKwGbixJ0VF9TYKNLnresbNWaQKpt3kjG3FUFzr1CqL9TyuKmez2E7yUufZi3dZGH/FTf745V99i8Lde+P0RGnkLd4fVxb/bq9XTnDfn+h9moUN0Y+CKkwiQmZEuWEgCA6lmdUsWPEksvvqz4/Zo/ZDCupRBk+0gup9Suvma14rZBbFJKLZNGcccyAhLc73Xy7sc6masV14cs+Snbc5KOH1/ZQ4MEDE+KX/EGbrHkjUE/ZbW/AFq24pVQoAdWXMPS2b+Ie+rRs/ZaRQ9x7SeMG/EOSSD6G3pVKxuEdMzNmJgIjU/TL5t3O4ETebdKRbR1j4LNOoy3l+f7OzBYqSE/F6rxjPsnmUPzD+R4jW9WXA45JVzIeNmB0ZTyYcD+u8XFU1pHSPxgF1IWS2gur5JCOmhYelSEAdA8qaMi36MBqUbmN/UcON6coZGX0xkt0S2Urh2TtJMQmdNDuZTvU8j/AF4iu6kNY4ZQaxwzF65MdtSCH5SVVPAE+I+S7z6CtmOQlDlOv/dxVd7LwRw411CKO9iDqbDRozlcLyurobdKfpqlbYoN4JbfY5fA7QYKfaUPcRRNHGWUmWbwaKb+CP2j6gV0dmfg9weEs7DvpB85wMoP1U4eZvVvtWa9BTp4VLCEO2WMLowBWaUp4sUpSgAarm0MfLHNvOXgOBFWOuLaWAEq23EbjXUOonGMveuCJ2xtQOoWM79T/SpTY6sIlzeYvy4VG4PYTBryEWHAcanZWyqTyBPuF6G+Bt8q1FV18/ZAdnjmWWT/ABJ5m9A3dr+SCpSozswlsJBzMasfNvEf1rZtzG9zC7g2NrKeRPH0F28lNeUte+xv7OYy8HKmIWeVzvSFjGvIvYd43oCF/Hzqvbex0atCFQlhI7EC1yojkudTYC5GpruwMgiw6xL7Qv3m/RiA768dXtfpWvZ+xO/XEONWLwoCeAWzSAdCshHnerNcMy2ouRxVHcyf2FDiI4UBjTXxMA5zXc5jvUC4va1+A1qYhiVQAoAHIaDma+JMXErBWdQx3AsAT5Am9bq0kscGbJ5eWKUpXTgrViMOj5cwvlYMOjLuPpTE4hUF2PQaXJPAKBqT0Fc4xE59mEAf5j2PuVW/WuAU3tbGytiFX2mKFB1cIq/vg1L7FlV4+h19GANasZhnmxyo6ZbRxu1iGUhGlykHT57R7wNxqN2deNVUGxS6fgJT/jVC6OOfs1a2rK1HykRmAxz4aYstyASrr9JQd3mNSOum4mvRcPMrqrqbqwBBHEEXBrzLaYCyzchJIdeRJb+dWT4PMWTCYWOqBGHk41H41f8AEKVfD27iOpgnFTRbKr+0IO6xeFlG4ylD/uRuCPeFqw1F7c/6H/qYP46Vpni2L+ympYz9lipWKzXqCqKUpQApSlAClKUAK4ttvlw8zcopD7lNdtRfac/3TEf6Mn8JrkujsezVslMsEQ5Rxj3KKg+1swJCH2VUFvOVxEp/D3vvqx4cWRR9UfpVH7UsXScj500aDoFkjjP7wc+teWh/IvUR3TPjZMjPGXfe0krHpeVzb03elY2ht6XD7PjbDMpkxEkioLHvMzO1yuttBlW9uVMWSgxCqbEAyIbX0YEn99X94qN7FbIZsZhnlYsAJHRSAFCqiNGyrc2uzk+grR0qTnn5LeoS2L6O7ZPYJZg6yscwA72YjO7SsAxCZtFVQRrvN9+hqS+DXbEjNPg5ZDI0DHI5NyUDZDryBAI+10qG2J8JQSSaOdLoWlZMg8ZZmuqk3taxIv5VHfBI9se44tFJccrMn9Kv2yi8YKThNxlv/wCj2WlKUsqmGQEgkajd08qzShoA+BEuYtYZiACeNgSQPK5PvqibSlEffv8AQedtejM9X4G+6vLu1kjsk0cas7O8+igk5Vdr3twJCr96q+ojlJfZd0X83+iL2pMX75uLNIPexQW/KpvshOVxirweORT5jKy/kr1XbC0aA3GjE8wljf1bJ7zVk7OwZckx3tJHbohJjX396zeTDlSLmlHBetX/ABtF/qL2zq+FXniUP4Vd/wDjUnUbjdcVhF5NM/4Y8v6yCqulWbo/syjpxm1GSYJYZdL89akRikzZMwzcqh9uYCRnDoL6DdzFfeydksrB33jcP616ngnKup1qWcPHX2TlKwKzUSmKUpQApSlACo3tIl8JiBzhk/gNSVaMbHmjdfpKw94Irj6Ors4sG940PNFPvAql40HusQtrsrSOBzuxmS3PXTzBq0dnpM2FgP8AlID5hQD+YqKfea8o3tkaWm7ZXu0LEPFItypSVSB85WyEgdbXI6r51J9gJxNMZNwSOMILEWspjlFuHjA91atuYcGAkAXjGdeA8ANx0uuYetZ7EQ5JnF9VhAPUllzH3r+9Who5rgfqFmplEk7JlsRiIGkWKSNrjPoGW5Ob8OXd/OrX8E2ygMRPMmsca90jD55JDM2/U2A3aWIq3bX2HhcUQZ4Q5XcdQbcrggkdKmdnYWOJFjiQIi7lUWAq3j3FW25uvbjk66UvSplI5dp4poo2dY2kYDwom9jw8h1qg7TwnaHEg3eOBT8xXANuRIDE++vSDXHiWNRaG1PD6PPNi4zbnffscjCMCMsH7uNvCtgBGRZSbkDXdetPZJZEmYSkl2Ry1zfVZBuPUyMfXyr0KNzevNcWJP7uY75pUyG2+zJmbX5u4XbgAeNqVN4xkv0LLfBr2Vg/2iWRiPizI5PIoXZkUfavmP1SOYq3lSbAC5LR7vtrr6b/AErm2dgxFGqDh7R5sd5/oOAAHCurC4g96qRgM+839lBzf+S7z0FyMu2xznldIdY/ay0VG4cZ8f0ig9zSv/8AmKu+RwoLE2ABJJ4AakmuPstGWR8Qws07ZwDvEYGWIfhAP3jVr8fXut3fBky4iTtKj9sbVTDpcgs7HLHGvtO3BVH6ngKiMPtHFQyI2KZTHKcpyiwhkJ8C5t7Kd2Y8fOtqd0IyUW+WKUG1ks9KUppEUpSgBSlKAFYNZpQBV9jyCF2wj6MrO0V9zxsxYFeZW5BHSufFwlWIPp5VZNpbMinXLKt7G4OoZTwKsNVPUVB4nZ+LiFh/eoxuuQs6jo3syetjWLqtBLc5QLdF6i+Su7UmYJIjro3hVlBIIY2s30SL7zofyGnA51xbvGfEi3sfZYOwurcrhNDwIB13Ho2zjYxFIGzRtlNlmUxkkC6gE+E6gbia1Q4WN53LKGvHGVuOslyPTLVWO6uLysM004ziXPZuJjmF13j2lOjKeTD+e48CRUki1Rhgo0IkBZGUGzCRxYbz861tNx00rqh7UuntOrrwaRXiB/3QuRulgL1aq1UZdlG3TT/15LXioGYDK5TqtjcWI4g+fmK+cPhMpzGR20sMxFgDbkBfcNTc9ahou1sRF2RrXAJVkcAkgAHxBhqRwrvm20otaN3uL+HILdCGYa1ZU4vlMrOqa4wSZrVJHeoF+1YzMiwPmW1w1tLgEE93nIFjvtbQ8jUZL2jmlHhzgHcIo2uQND8bJ4bfhNQndBE4UWN8Ept3H90CkZHeZSTyRbHxN10NhxPQG1WjQgYbQkoL2Frm0LLYXIG8itmNxFo3jKMjSAhSxDZmeyG7BjdhmBNze3OxtvhF5uiIfe7C3qBGfxCqNlrmm/BpU17ImwrM+8iNfqnM5+8RZfQN0IqV2Dh1RrKLAAnqSd5JOpJ5nWuZVJ0AvXQ8zQAKq555dI47+9n5KN5PS1VYqU3tRC6SUWjdtS+IlXCL7Oj4gjhHfRPNyLeQNSu1tpph0FlLOxyxxrvduAHIDidwFaMBho8HA7yPc6yTSHezcT5cAOVhXHsrDvI5xUwtI4tGh/6UZ1C/aO9j6cK2crR04/2Zmfyf0fezdnMGM87B52Frj2Y1+hGOA5nea7cZhUlRo3F1YEEdD/Ot9KxpWSlLc3yTOPs1jGKtBKbywkIx+mtrxyfeXf1BqaqtbTPczRYkezcQzfYc+Bj9lyPRjVkFei0l3q1p+RM1hmaUpVogKUpQApSsMbUAZpXwkgYXBBHStRxkefJm8XKg6k2feIgV1KsAVIIIO4g6GvLsPsuIYyHC4lblO8hU3KkqwzYeRGBB3Jl043FerVEbe2HDiQrP4HjIZJFsGWxB3nhpuNKsrUsP4G1WuGV8lSx+wiuKWJZppI44+8kV2uDmbLEpAAuPCzG972FSODwRmZgSRGhAa2jM1g1g29QAQbjW53ixvt2ShnnmxR+Sd17rgXEa5Ax+rfOQON78BUzhFTLdNzXe/PMc1/zrz+qkvVe3os+tLbtIDbexo48k8WHVjHfPb5RlsfZv7RBsdTfQ23kHnXaGbKoRgzkBcw8Outy63WwAJ37hVrlS4IuRcEXBsdeR4VX+z+AjJdZFDGIiNcwBAVRlDgbgWZW1+rbhXK7pRiSruxFpkrsvAmINdszM2Zjly62AsBc6AAW1qN2zhe7fvV0RyBIOAYiyuOVzlU+angb2CtGOw4kjeM/OUj38xxHSk7svkVGbUtxSWaXEMWgj7wR5sh3IXsQWz8bAlQBcksdwsal9gdmMNNAk7s7SyeJpEd4yDuKAKdAtstjfdU5h8WpjRz4bgaciRqPQ/pWnsiwKSsvybYiUxngV0zEdC+etP8e1KTi14JXXzlHjgxF2WjX2cRiR/vH+ld2zdjwwXZFJdvadyWkbzY626bqka5dp4xYYnlbcilvO24DqTYetaqrhHlIpuUpdshdpN+04kQb4ocry8mkOsSHoB4iPs1K1H7CwjRxAv8o5Mkp+u+pHpovktSNed1V3q2NjksLApSlVzpzbRwolieI7nUr5XGh9Dr6Vs7OYwy4aJ29rLlf7aEo/7ymttcHZrQ4lOC4hyPJ1ST9WNan4yeJOJCfRO0rnwR8A9f1roraFNYeBSlKDgrTjIc6Mt7XG+t1KDqeHkqmHxEmGcqwuOI59RWzZSNLNnO4HMf5Cp/FYNJBZhf8AWs4XCpGLKLCpZLktVFxbS9z4N9QnatiY0hBI7+VY2I35LFpLeaqw9am6hO1qkRLMB8hIkp+yDlk/cZvdSbs+m8d4KkP5I1bUVgixR+HORGLcFscxHkgY+gqQRQAABYDQCuUWaYNe4Efh1+mxzG3ki69TXZXlmPycm08Q0cZZAGa6KoOguzKup4DXfXIcIEbD8XzuGYaZsySu+nLNqOVbtuSZYr8niPl8ahJNcuJx3eNEqizGRbHlYEv70Dj1oROMG1lEzSgrNcIEZhoM8Vr2tJLbyEjgflX12QXJHLBwhmkVfstaVfykt6V0wIIowGYWUEsx0HNieXE1p7Kgskk5BAnlLqDvyBVjjNuqoD61p/jc+o8dYOTl7cE5Ub2gwDTwlEYBrowzC6kowcBra2JWxqSqO2jtvCwfLTxoeRYZvw7/AMq2mk1hiFnPBxbL2l3uZHUxyppJGd4PAqfnKeDVna21Y8OoaS/iYKoUElmO4DgPUioLa+3sNNbEYPvJJojYGOKQq6mxeJ2y2sRqORsasbxRzxWdLo6i6sOBF7EcD+lec1NMarMLlFj9o5Ejx8vCPDr9b42T3AhF95rcvZ4n5TFYhj0cRj3Io/WtOxsS8EgwkrFlIJw8h3so3xseLKOPEeVWG9a+noocFKKFSlJMhf8Aw1FwmxI/9xL/ADNbcJs5cOrqjO7ytmLOQWJyhd4A0AUVLVgirUa4ReUiO9+TXEQPCOAFba1xxAXPEnWtlTOMUpSg4KUpQApSlACovtHjO6gayhmf4tFO5nfwqD01JPQGu7F4lIkaR2CqouxO4Cq/HJJipo5mjKQxhzGH0d2ayhynzQFzWvr4qr6m9VQb8+CcI5Zq2bg3w3dKz50CiIMd/isVDdAylR/qAcLmcr4miDKVYXBFiK5ExDx+GQMwHsuqlrjk6qCQ3W1j0vYebbyO7M7aUHDyjnGwHmwso95FcsGDyYhLtf4uQjTjmjF/QE/irakpmkylSiplfK3tOdcrW4KCL663Ava2vXicMHsblWHssu8X39CDxB091HRJSaWDor5dgASSABqSdwHEmuATzhu7tExt7V3X9yx/irZ+xlrGV8/HKBlS/C66lvvEiokcYOLbGFOKw7gFlBVio3ZiBeMsOVxfKeYvyqc2RihLDFIBYOitblcA29K+KhIJZcAACe8woO+3xkIJvrb20F9+8da0vx98YNxl5IzWVwTHaSR1wk7ISGEUhUjeCFJBFfmieZmJLEkk63NfovtN2gwmHhbv5R40ICjVmDAjQctd+6vzkSL9L1qXdos6NcPgtvY7tzLg1EJjV4sxJA0e53kNx3cRXrK9pMIQMsmYkDwxhpD5HIDrUd2F2PsuXDpNDh0Lbn7zxsrjePFp10A0Iq5xxKosoAHICwqrL8fGbzkTdbFy4RUtqYiTEIFhw0+dXR43ZAiqysDc5iDa1wdNxq3rS1Zq3RRGlYiV5SyKUpTyIpSlAClKUAKUpQArBr5lkVQWYgAAkk6AAbyTVeTaWKxPigyxQ/NkkUs7j6SpcBV5E7+VKtuhUsyZKMWzXtGYYnFiA6xwWdxwaU6op5hV8VuZFTNVeLDS4Vxm+NaWR2zKLM7tckFL2UZbC97C2uXjPwYslsjrke1wL3DDjY8xcXHC43768/qbXbY5ePBZcVFLB1UtXHinZm7pDbTM7DeFJIAX6zWOvAA8bVCS5HPxcUeXd3jrnZ7aErc7uTEm/K1iUwrcugjByeEWGbDqxVjvXUEEg9R1BsLjy5VESbbYAgpZwcuXe2Y6gAfOuNQd1tedcuEaWFsynOlvFHYKftJayg79LC/PQVKYKaOWV5UIKhEXN9a7MQb7iAw0O7MRUp1OPZNxcH7lkzggYkLzMAzG/O19yA73P6km1bhi3PswuRzYqt/QnMPUCojE7QaSZu73J4Q5F1UkAuUG5n1C66LlO+9jrOGB1Ysx5szE+mth6AVOFDlySVMpcsmjjSvykbIPpXUqPtEG6+ZFutdboCCCLgggjmDvFV5JJItULOvzo2Ja445C2oNtwvY7rC9x07K2hmTJCO8ykgMSQgS5yXaxJNhuAJ0BNr1GdTgLnW49nh/abDPFipYiS2RyouSTlGifu2rGzezuMn+Sgkccwpy/i3fnXrWH2QYJ5JpcGmJaVwVdSDk0Asyv7OoJzC++rRs3baO/cujQy2uEe3iHExspKsB01HKtjTuE0sy5Gz1Divais/Bb2dxeDWUYgBVfKVXMCbi9ybXA0Iq+0vSr8VhYKE5ucssUpSukRSlKAFKUoAUpSgBWCazUP2ondYMqHK0jpEG+j3jBSw6gXt1tUZSUU2zqWXgj8ZJ+2ymMH+7RN8ZylkB9i/FF48zpwqZArThMKkSLGgsqiwH/AHxrazAC53V5rUXu2e5lhLwjm2jJ3cbygAsqG3Xkt+RNq0bJ2NBkDPGjsd7Mqkk8SSRvJvWnaeKEsUqpcsmRrbs1mDAdASjL6GteD7U4aNQJXMYvYM6Oo14EsulP0e3nIzZLY8IljseDWyZL7+7ZkPrlIvUdJsd4yoQ549FsbZkG4EEWDKNNN/U7qlMLtbDS/Jzxv9l1P866yav7I/AmM5wfBxJgY1GouetQ21YysqxReEYjfbgyZc7efdnjxjXnU7KTVdmxobGxAG6oJENt3eOua1+YWL/5BSZqLWGNjubzkmU2RGLAaKAAAOA8+J43r5n2OCLK5XmbAm3S+gPUg+Vdsb10CnJJkHbNeSMj2FAPaDOfruxH4b5R6CvpNiYdRZIxH/pkp/CRUiTXFjMeq6DVv086Go45ILfN4ODC4pllMLnMDfu2NrkrvVrCxNrkEbwDfdc7tp7PSdMpupBzI6+0jDcynn+tReHOedLH2CzueQKOgvyJL38lNTwcXtcXrJuxCeYj7I7ZcHBszbjK/wCz4qyygXVh7Eqjey8iOK8PKpuPEI25gagO0mzTPCcmksZ7yJuTruHkRdT0NcmzZzLEkyqQGUN5E7x6GtvQ6j1o4faIxpjJZzgt161PikGhYVBNipCLZjWyDAyNwsOtXtvyc/x1HmbJ5WB3VmubBYbILXv+ldNRKzST4FKUoOClKUAK5NqYBJ4mie9mG8b1IN1YHgQQD6V10rjWeAK7Gu0UGUxwykaZ+8KZuRZMhsedjWnF7K2hMtmxEUI+jEmY/jfT92rRSqq0VKecDVbJPKKQuw8bh2WSJ2xGhV45mUBlOt1ZU8JBHEHQndWmPYkzSLNibXU3jiS/dodRck6yNYnU2AvoKvtYtTY6eqM96jyNjqpJ5wUvEbKw7+3BG3mi399q5Juz0BFozJCeBikdbeS3y/lV7fDod6j3VpbZ8Z4U9qL7Q1auPlHnzbLxq6CVJ1/zWmQ+tmZT+EV9fsGNZQn92iUWtl71itjcFbZLEHWr4dmR9ffT+y4+tIeloby0TWrh8f8AhV4MZtGPQ/s8/Vs8TeoAZfdauj+2NoHdBh16mWRvyEYqwDZcfX319rs+Pl+dS9GvwJlbS/BVZ5doS6PiI41O/uIzn8g7k28wKiZNm4tHPjkxMZ4d73Uq9LqArj3GvRFwqDcoraEA4CiVNcljALVRj/GJQE2btBwAmGhSEG4iMrAlvpyNkIkb8h1NiOh4scmrYRjbjHJGx9ASpNXmlqrS0FMvBH/Kkukiqx9oY8gBSYy/4fcyByeA1FvW9ql+z2DaLDRRuAGCDMN4BOpHW17VJ0qen0sac48iJT3GpcOg1Cj3VttSlWiDeRSlKAFKUoAUpSgBSlKAFKUoAUpSgBSlKAFKUoAUpSgBSlKAFKUoAUpSgBSlKAFKUoAUpSgD/9k="></a>
							</div>
							<div class="desc">
								<h3><a href="/y-kien-khach-hang/duong-duy-thanh" title="Dương Duy Thanh">Diệu Nhi</a></h3>
								<div class="time"><i class="fa fa-clock-o color-red"></i> 11/12/2019</div>
								<div class="short-desc">
									<p></p>
								</div>
								<a href="/y-kien-khach-hang/duong-duy-thanh" title="Dương Duy Thanh"
									class="btn-detail">Chi tiết</a>
							</div>
						</div>
						<div class="pagination-wrapper">
							<ul class="pagination">

							</ul>
						</div>
						<script type="text/javascript">
							String.prototype.getParamFromUrl = String.prototype.getParamFromUrl || function (name) {
								var temp = "[\?&#]" + name + "=([^&#]*)";
								var regex = new RegExp(temp);
								var results = regex.exec(this);
								if (!results)
									return "";
								else
									return results[1];
							};
							$(".pagination li a").click(function (event) {
								event.preventDefault();
								var link = $(this).attr('href');
								var seolink = link.getParamFromUrl("seolink");
								var page = link.getParamFromUrl("page");
								window.location.href = "#page=" + parseInt(page);

							});
						</script>
						<script type="text/javascript">
							(function ($) {
								String.prototype.getParamFromUrl = String.prototype.getParamFromUrl || function (name) {
									var temp = "[\?&#]" + name + "=([^&#]*)";
									var regex = new RegExp(temp);
									var results = regex.exec(this);
									if (!results)
										return "";
									else
										return results[1];
								};

								$(document)
									.ready(function () {
										$(".pagination li a")
											.click(function (event) {
												event.preventDefault();
												var emlClass = $(this).attr("class");
												if (emlClass == undefined) {
													var link = $(this).attr('href');
													var page = link.getParamFromUrl("page");
													var nameAscii = link.getParamFromUrl("seolink");
													var currentUrl = window.location.search ? window.location.search : window.location.hash;
													var urlLoad = '/Ajax/Content/PartialNews';
													$.ajax({
														type: "POST",
														url: urlLoad,
														data: { page: parseInt(page), seolink: nameAscii },
														dataType: "text",
														success: function (data) {
															$("#listing_ajax_container").html(data);
															$('html, body')
																.animate({ scrollTop: $('#listing_ajax_container').position().top }, 'slow');
														}
													});
												}
											});

									});

							})(jQuery);
						</script>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-s">
				<div class="list-menu over">
					<h3>Tin nổi bật</h3>
                    <ul class="ul feature-news">
                        @foreach($tintucnoibat as $ttnb)
                            <li><a href="/tin-tuc/truoc-luot-ve-ban-ket-champions-league-vo-vong"
                            title="{{$ttnb->TieuDe}}"
                                class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>{{$ttnb->TieuDe}}</a></li>
                        @endforeach
                    </ul>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection