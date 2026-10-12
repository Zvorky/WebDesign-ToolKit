/**
 * Optional non-blocking ES module stub (ADR-3.10).
 * Catalog widgets: vanilla JS only; keep small; do not block LCP.
 */
export function ready(fn) {
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", fn, { once: true });
  } else {
    fn();
  }
}

ready(() => {
  document.documentElement.dataset.templateReady = "1";
});
