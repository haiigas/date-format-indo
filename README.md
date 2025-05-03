# Indonesian Date Formatter

`date-format-indo` is a simple PHP utility function to format datetime strings into the Indonesian date format. It includes day names, full month names, and time. This function is suitable for applications using CodeIgniter or any other PHP-based frameworks.

## Features

- Formats dates into readable Indonesian format, e.g., `Senin, 01 Januari 2024 08:30`.
- Supports day names and full month names in Bahasa Indonesia.
- Includes hour and minute information.
- Can be used within CodeIgniter or standalone PHP scripts.

## Requirements

- PHP 5.6 or higher
- PHP `date` and `strtotime` functions enabled

## Installation

1. **Add the Function File**  
   Create a helper file in your CodeIgniter project (e.g., `application/helpers/utils_helper.php`) and insert the function.

2. **Load the Helper**  
   Load the helper in your controller or autoload it:
   ```php
   $autoload['helper'] = array('utils');
   ```

3. **Use the Function**  
   Call `format_date_indo('2024-01-01 08:30:00')` in your views or controllers.

## Customization

- Adjust timezone by modifying `date_default_timezone_set('Asia/Jakarta')` to your local timezone.
- Modify arrays if you want to change the language or format.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any improvement or fix.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
