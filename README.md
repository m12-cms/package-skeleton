# {{package_studly}} Package Skeleton

This is the official skeleton for creating new M12 CMS packages.

## Continuous Integration

This skeleton includes a minimal CI pipeline using GitHub Actions:

```yaml
.github/workflows/ci.yml
```

It runs:
- Laravel Pint (code style)
- PHPStan (static analysis)
- PHPUnit (Testbench-powered tests)

CI runs on every push to `main` and on every pull request.

## Usage

Create a new package:

```
composer create-project m12-cms/package-skeleton my-new-package
```

Then replace placeholders such as `{{namespace}}`, `{{package_studly}}`, etc.
