# Maintenance Scripts

This directory contains legacy one-off scripts used while repairing routes,
slugs, views, and content integrity during the migration of the site to the
current Laravel structure.

These scripts are not part of the runtime application and are not executed by
the web app, CI, or deployment workflow. Treat them as maintainer utilities:
review them before use and run them manually only when a specific maintenance
task requires it.

Some scripts still reference the pre-registry routing structure that used
dedicated content controllers. Those files are preserved as archival repair
tools from earlier cleanup work and are not guaranteed to work against the
current registry-driven application without modification.

The `archive/` subdirectory contains historical prototypes and dead runtime
artifacts that were intentionally moved out of `resources/views` and `public`
to keep the active application surface smaller and less confusing.
