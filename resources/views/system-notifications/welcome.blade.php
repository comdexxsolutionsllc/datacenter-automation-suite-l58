@component('mail::message')
  # Welcome

  The body of your message.

  @component('mail::button', ['url' => '/login'])
    Login
  @endcomponent

  @component('mail::panel')
    This is the panel content.
  @endcomponent

  @component('mail::table')
    | Laravel       | Table         | Example  |
    | ------------- |:-------------:| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
  @endcomponent

  Regards,<br>
  {{ env('COMPANY_NAME', 'Set COMPANY_NAME in your environment file.') }}
@endcomponent
