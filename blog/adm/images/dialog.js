function confirm_dialog(_url, _text)
{
	if(confirm(_text))
	{
		location.href = _url;
	}	
	else
	{
		return false;
	}
}