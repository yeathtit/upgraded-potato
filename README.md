# Upgraded Potato

A lightweight static-site project with PHP analysis and OpenShift deployment support. Use this repository as a starting point for building, scanning, and deploying a containerized web application.

---

## Table of contents

- [Project purpose](#project-purpose)
- [Prerequisites](#prerequisites)
- [Setup](#setup)
- [Running locally](#running-locally)
- [Tests and static analysis](#tests-and-static-analysis)
- [Deployment](#deployment)
- [Usage examples](#usage-examples)
- [Contributing](#contributing)
- [Code of conduct](#code-of-conduct)
- [Security](#security)
- [License](#license)

---

## Project purpose

Upgraded-potato provides a template repository that wires together:

- **GitHub Actions** workflows for code scanning (CodeQL), PHP static analysis (PHPMD), static-site deployment (GitHub Pages), and container deployment (OpenShift).
- A **Dockerfile**-based container build pipeline ready for Red Hat OpenShift.
- A **GitHub Pages** deployment that publishes the repository contents as a static site.

---

## Prerequisites

| Tool | Minimum version | Notes |
|------|----------------|-------|
| Git | 2.x | Clone and version control |
| PHP | 8.1 | Required for PHPMD analysis |
| Docker / Podman | 20.x / 4.x | Required for container builds |
| `oc` CLI | 4.x | Required for OpenShift deployment |

> **Tip:** GitHub Actions handles all of the above automatically in CI. Local installation is only needed when you want to run steps manually.

---

## Setup

1. **Clone the repository.**

   ```bash
   git clone https://github.com/yeathtit/upgraded-potato.git
   cd upgraded-potato
   ```

2. **Install PHP dependencies** (if you add any via Composer).

   ```bash
   composer install
   ```

3. **Configure secrets** for OpenShift deployment by adding the following [repository secrets](https://docs.github.com/en/actions/security-guides/encrypted-secrets):

   | Secret | Description |
   |--------|-------------|
   | `OPENSHIFT_SERVER` | Your OpenShift API server URL |
   | `OPENSHIFT_TOKEN` | A service-account token with deploy rights |

---

## Running locally

To preview the static content locally you can use any static file server. For example, with Python:

```bash
python3 -m http.server 8080
```

Then open <http://localhost:8080> in your browser.

---

## Tests and static analysis

### PHP Mess Detector (PHPMD)

Run PHPMD against the whole project:

```bash
phpmd . text codesize
```

### CodeQL

CodeQL runs automatically on every push and pull request via the [CodeQL Advanced](.github/workflows/codeql.yml) workflow. To run it locally, follow the [CodeQL CLI quickstart](https://docs.github.com/en/code-security/codeql-cli/getting-started-with-the-codeql-cli/about-the-codeql-cli).

---

## Deployment

### GitHub Pages

Every push to `main` triggers the [Deploy static content to Pages](.github/workflows/static.yml) workflow and publishes the repository as a GitHub Pages site.

### OpenShift

Every push to `main` also triggers the [OpenShift](.github/workflows/openshift.yml) workflow, which:

1. Builds a container image from the `Dockerfile` at the repository root.
2. Pushes the image to the GitHub Container Registry (GHCR).
3. Deploys or updates the application on your OpenShift cluster.

Ensure `OPENSHIFT_SERVER` and `OPENSHIFT_TOKEN` secrets are set before pushing. See the [OpenShift workflow](.github/workflows/openshift.yml) for full configuration options.

---

## Usage examples

After the GitHub Pages deployment succeeds, your site will be available at:

```
https://yeathtit.github.io/upgraded-potato/
```

After the OpenShift deployment succeeds, the workflow prints the application route:

```
======================== Your application is available at: ========================
https://<app-name>-<namespace>.apps.<cluster-domain>
===================================================================================
```

---

## Contributing

Contributions are welcome! Please read [CONTRIBUTING.md](CONTRIBUTING.md) for the full workflow.

Quick summary:

1. Fork the repository and create a feature branch from `main`.
2. Make your changes and commit them with a clear message.
3. Open a pull request and fill in the pull request template.

---

## Code of conduct

This project follows the [Contributor Covenant Code of Conduct](CODE_OF_CONDUCT.md). By participating you agree to uphold this standard.

---

## Security

Please review the [Security Policy](SECURITY.md) for information on supported versions and how to report a vulnerability.

---

## License

This project is licensed under the [MIT License](LICENSE).
