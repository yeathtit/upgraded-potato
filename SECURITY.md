# Security Policy

## Supported Versions

The following versions of this project are currently receiving security updates:

| Version | Supported          |
| ------- | ------------------ |
| 1.x     | :white_check_mark: |

## Reporting a Vulnerability

**Please do not report security vulnerabilities through public GitHub issues.**

If you discover a security vulnerability in this project, please report it using
[GitHub's private vulnerability reporting](https://github.com/yeathtit/upgraded-potato/security/advisories/new).

You can expect an acknowledgement within **72 hours** and a resolution update
within **7 days**. If the vulnerability is accepted, a fix will be released as
soon as possible. If declined, you will receive an explanation.

## Account Protection Recommendations

To keep your GitHub account and this repository secure:

- **Enable two-factor authentication (2FA)** on your GitHub account:
  <https://github.com/settings/security>
- **Use branch protection rules** on `main` to require pull-request reviews and
  passing status checks before merging.
- **Rotate secrets regularly** — revoke and regenerate `OPENSHIFT_TOKEN` and any
  other repository secrets on a schedule.
- **Review third-party app access** periodically at
  <https://github.com/settings/applications> and remove apps you no longer use.
- **Monitor security alerts** via GitHub's Dependabot and code-scanning features
  enabled in this repository.
