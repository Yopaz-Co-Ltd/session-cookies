.PHONY: run-no-cookie run-with-cookie run-with-cookie-session

run-no-cookie:
	php -S localhost:8000 -t login_demo_no_cookie_session/public

run-with-cookie:
	php -S localhost:8001 -t login_demo_with_cookie/public

run-with-cookie-session:
	php -S localhost:8002 -t login_demo_with_cookie_session/public	